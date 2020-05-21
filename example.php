<?php

use MDServices\SimpleTimer;

require_once __DIR__ . '/src/StaticTimer.php';
require_once __DIR__ . '/src/SimpleTimer.php';

$timer = new SimpleTimer();
$startTime = microtime(true);
$timer->wait(0.1); // will do sleep for 100 ms
$endTime = microtime(true);
$diff = round($endTime - $startTime, 2);
var_dump($diff);
