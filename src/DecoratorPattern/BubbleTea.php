<?php

namespace Kyimyohan\PhpDesignPatterns\DecoratorPattern;

class BubbleTea implements DrinkInterface
{
    public function getPrice()
    {
        return 10;
    }

    public function getDescription()
    {
        return "Bubble Tea, ";
    }
}
