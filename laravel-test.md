# Laravel test

## Goal

- create a api `http://localhost:8080/api/activity-logs`
- filter `logs` by `user_id` and `type`
- sort results

**For example** 

filter `logs` by `user_id=1` and `type=login`, sort results by `id`, `descending`.

```
http://localhost:8080/api/activity-logs?user_id=1&type=login&order_by=id&sort=desc
```


## 1. this is table schema, create a migration file then paste it in it.

```php
Schema::create('activity_logs', function (Blueprint $table) {
	$table->id();
	$table->unsignedBigInteger('user_id');
	$table->string('activity');
	$table->string('type', 60)->nullable()->default('');
	$table->longText('data')->nullable();
	$table->timestamp('created_at')->nullable();
});
```

## 2. create controller `ActivityLogController`, finish `index` method in it.

```php
namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class ActivityLogController extends Controller
{
	/**
	 * get ActivityLogs
	 * support filter by  `user_id`, `type` and order by `id`
	 * 
	 * @example http://localhost:8080/api/activity-logs?user_id=1&type=login&order_by=id&sort=desc
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index(Request $request): \Illuminate\Http\JsonResponse
	{
		/** @var \Illuminate\Database\Query\Builder $query */
		$query = app(Pipeline::class)
		->send(ActivityLog::query())
		->through([
			UserId::class,
			Type::class,
			OrderBy::class,
		])
		->thenReturn();

		$logs = $query->paginate($request->input('per_page', 15));
		return response()->json($logs);
	}
}
```
