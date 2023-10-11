# Full stack

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

const updateFlight = (key, value) => {


}

updateFlight('isMidNightFlight', "yes") // pass
updateFlight('isConnecting', "yes")  // error
```


## PHP

https://onlinephp.io/

1. 
```
var_dump(PHP_INT_MAX + 1);
```

2. final methods
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

