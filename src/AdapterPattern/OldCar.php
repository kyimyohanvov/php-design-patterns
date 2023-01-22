<?php

namespace Kyimyohan\PhpDesignPatterns\AdapterPattern;

class OldCar implements OldCarInterface
{
    public function turnKey()
    {
        return "Old car engine is running";
    }
}
