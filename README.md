# Simple timer

Delays the program execution for the given number of `float $seconds`.

### Example usage
```
$timer = new SimpleTimer();
$startTime = microtime(true);
$timer->wait(0.1); // will do sleep for 100 ms
$endTime = microtime(true);
$diff = round($endTime - $startTime, 2);
var_dump($diff);
```
You will see:
```
double(0.1)
```
