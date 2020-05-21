<?php

namespace MDServices;

class SimpleTimer
{
    /**
     * @param float $seconds
     */
    public function wait(float $seconds): void
    {
        StaticTimer::wait($seconds);
    }
}
