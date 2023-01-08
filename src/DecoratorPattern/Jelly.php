<?php

namespace Kyimyohan\PhpDesignPatterns\DecoratorPattern;

class Jelly implements DrinkInterface
{
    protected $drink;

    public function __construct(DrinkInterface $drink)
    {
        $this->drink = $drink;
    }

    public function getPrice()
    {
        return $this->drink->getPrice() + 2;
    }

    public function getDescription()
    {
        return $this->drink->getDescription() . "Jelly, ";
    }
}
