<?php

namespace iRacingPHP\Models;

class RateLimits
{
    /**
     * @var int
     */
    public $limit;
    /**
     * @var int
     */
    public $remaining;
    /**
     * @var int
     */
    public $reset;
}