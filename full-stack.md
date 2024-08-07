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

## React

Rerender
```
https://codesandbox.io/p/sandbox/level2-1-k4qkxx
```

Remove duplicates && Intersection

```javascript
const a = [1, 2, 3, 4];
const b = [3, 4, 5, 6];


// array_unique
const array_unique = function(){
  //
}

// array_intersect
const array_intersect = function(){
  // 
}

// expect: 1, 2, 3, 4, 5, 6] 
console.log( array_unique(a, b) );

// expect: [3, 4] 
console.log( array_intersect(a, b) );
```

## typescript

https://www.typescriptlang.org/play

1. 
```typescript
const ORDER_STATUS = ['pending', 'completed', 'cancelled']

// type Orderstatus = 'pending' | 'completed' | 'cancelled'
type OrderStatus = 

```

answer
```ts
const ORDER_STATUS = ['pending', 'completed', 'cancelled'] as const

// type Orderstatus = 'pending' | 'completed' | 'cancelled'
type OrderStatus = (typeof ORDER_STATUS)[number]

```

2. 
```typescript
type YesOrNo = 'yes' | 'no'
type Flight = {
	airline: string;
	number: string;
	isMidNightFlight: YesOrNo,
	stopover: boolean
};

const flight:Flight = {
	airline: '',
	number: '',
	isMidNightFlight: 'yes',
	stopover: false
}

const updateFlight = (key:any, value:any) => {


}

updateFlight('isMidNightFlight', "yes") // pass
updateFlight('stopover', "yes")  // error
```

answer

```ts
type FlightKey = keyof Flight
const updateFlight = <K extends FlightKey>(key: K, value: Flight[K]) => {
}

updateFlight('isMidNightFlight', "yes") // pass
updateFlight('stopover', false)  // error

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



/**
 * Complete this function, and expect it to return `$grouped`
 * 
 * $grouped = [
 * 	"page" => [
 * 		["id"=> 1, "type" => 'page'], 
 *       	["id"=> 3, "type" => 'page'],
 * 		["id"=> 4, "type" => 'page'], 
 *    	],
 *    	"post" => [
 * 		["id"=> 2, "type" => 'post'],
 *    		["id"=> 5, "type" => 'post'],
 *    	]
 * ];
 */
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
