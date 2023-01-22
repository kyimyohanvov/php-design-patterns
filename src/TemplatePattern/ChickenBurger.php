<?php

namespace Kyimyohan\PhpDesignPatterns\TemplatePattern;

class ChickenBurger extends Burger
{
    protected function addMeat()
    {
        $this->burger .= " Chicken +";
        return $this;
    }
}
