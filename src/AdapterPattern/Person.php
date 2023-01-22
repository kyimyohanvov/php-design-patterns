<?php

namespace Kyimyohan\PhpDesignPatterns\AdapterPattern;

class Person
{
    public function drive(ModernCarInterface $car)
    {
        return $car->pushButton();
    }
}
