<?php

namespace Acme\DemoBundle\Random;

class Random
{
    public $number;

    public function getNumber($limit)
    {
        $number = rand(1, $limit);

        return $number;
    }

}