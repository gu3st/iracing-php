<?php

namespace iRacingPHP;

class DataClass
{
    protected $api;

    function __construct(Api $api)
    {
        $this->api = $api;
    }

}