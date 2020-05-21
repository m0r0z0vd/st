<?php

namespace MDServices;

class StaticTimer
{
    /**
     * @param float $seconds
     */
    public static function wait(float $seconds): void
    {
        $startTime = microtime(true);

        while ((microtime(true) - $startTime) < $seconds) {
            if ((microtime(true) - $startTime) >= $seconds) {
                return;
            }
        }
    }
}
