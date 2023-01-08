<?php

namespace Kyimyohan\PhpDesignPatterns\DecoratorPattern;

class Pudding implements DrinkInterface
{
    protected $drink;

    public function __construct(DrinkInterface $drink)
    {
        $this->drink = $drink;
    }

    public function getPrice()
    {
        return $this->drink->getPrice() + 5;
    }

    public function getDescription()
    {
        return $this->drink->getDescription() . "Pudding, ";
    }
}
