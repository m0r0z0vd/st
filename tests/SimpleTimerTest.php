<?php

namespace MDServices\Tests;

use MDServices\SimpleTimer;
use PHPUnit\Framework\TestCase;

class SimpleTimerTest extends TestCase
{
    /** SimpleTimer */
    private $st;

    protected function setUp(): void
    {
        $this->st = new SimpleTimer();
    }

    public function testTimer(): void
    {
        $ms = rand(10, 1000);
        $s = round($ms / 1000, 2);
        $startTime = microtime(true);
        $this->st->wait($s);
        $endTime = microtime(true);
        $diff = round($endTime - $startTime, 2);
        $this->assertEquals($s, $diff);
    }
}
