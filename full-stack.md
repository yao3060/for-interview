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

