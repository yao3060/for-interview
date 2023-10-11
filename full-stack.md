# Full stack

## javascript

1. how to copy a object, copy `objectA` to `objectB`
```javascript
const objectA = {}
const objectB = ?
```

2. shallow compare object, return true/false.
```javascript
const objectA = {}
const objectB = {}

function shallow_compare(a, b) {
}
```

## typescript

https://www.typescriptlang.org/play

1. 
```typescript
const ORDER_STATUS = ['pending', 'completed', 'cancelled']

// type Orderstatus = 'pending' | 'completed' | 'cancelled'
type OrderStatus = 

```

2. 
```typescript
type YesOrNo = 'yes' | 'no'
export type Flight = {
  airlinesNo: string;
  flightNo: string;
  isMidNightFlight: YesOrNo,
  isConnecting: boolean
};

const flight:Flight = {
airlinesNo: '',
flightNo: '',
isMidNightFlight: 'yes',
isConnecting: false
}

const updateFlight = (key:any, value:any) => {


}

updateFlight('isMidNightFlight', "yes") // pass
updateFlight('isConnecting', "yes")  // error
```


## PHP

https://onlinephp.io/

1. what's going to happen？
```
var_dump(PHP_INT_MAX + 1);
```

2. can we overwrite `final methods`
```php
class BaseClass {
   final public function testing() { 
   }
}

class ChildClass extends BaseClass {
   public function testing() {
        
   }
}
```

3. array group
```php
$posts = [
  ["id"=> 1, "type" => 'page'],
  ["id"=> 2, "type" => 'post'],
  ["id"=> 3, "type" => 'page'],
  ["id"=> 4, "type" => 'page'],
  ["id"=> 5, "type" => 'post'],
];

$grouped = [
   "page" => [
   	  ["id"=> 1, "type" => 'page'], 
      ["id"=> 3, "type" => 'page'],
	  ["id"=> 4, "type" => 'page'], 
   	],
   	"post" => [
		["id"=> 2, "type" => 'post'],
   		["id"=> 5, "type" => 'post'],
   	]
];

// complete this function, make it return `$grouped`
function array_group($posts, $key) {

  return ;
}

```

## SQL

1. Pagination

```
A table `logs` contains  millions of data.
+-------------+-----------------+------+-----+---------------------+----------------+
| Field       | Type            | Null | Key | Default             | Extra          |
+-------------+-----------------+------+-----+---------------------+----------------+
| id          | bigint unsigned | NO   | PRI | NULL                | auto_increment |
| type        | ENUM('add', 'update') | NO   |     | 	    	    |                |
| action      | varchar(255)    | NO   |     |                     |                |
| description | varchar(255)    | NO   |     |                     |                |
| user        | bigint unsigned | NO   |     | 1                   |                |
| created_at  | timestamp       | NO   |     |                     |                |
+-------------+-----------------+------+-----+---------------------+----------------+
```

**requirement:**
- write a `SQL` to get `logs`.
- descending order
- 50 items per page.
- [optional] filter by `type`, `user`

## DevOps
- CI/CD
- Docker
- K8s
