<?php

namespace Kyimyohan\PhpDesignPatterns\DecoratorPattern;

class Decorator
{
    private $drink;
    public function __construct(DrinkInterface $drink)
    {
        $this->drink = $drink;
    }

    public function getPrice()
    {
        return $this->drink->getPrice();
    }

    public function getDescription()
    {
        return $this->drink->getDescription();
    }
}
