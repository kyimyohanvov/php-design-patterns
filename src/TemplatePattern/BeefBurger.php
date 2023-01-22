<?php

namespace Kyimyohan\PhpDesignPatterns\TemplatePattern;

class BeefBurger extends Burger
{
    protected function addMeat()
    {
        $this->burger .= " Beef +";
        return $this;
    }
}
