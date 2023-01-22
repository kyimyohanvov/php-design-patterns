<?php

namespace Kyimyohan\PhpDesignPatterns\TemplatePattern;

abstract class Burger
{
    protected $burger;

    public function make()
    {
        $this->layBread()
            ->addMeat()
            ->addSalad()
            ->addSauce();
    }

    public function get()
    {
        return $this->burger;
    }

    protected function layBread()
    {
        $this->burger .= "Bread +";
        return $this;
    }

    protected function addSalad()
    {
        $this->burger .= " Salad +";
        return $this;
    }

    protected function addSauce()
    {
        $this->burger .= " Sauce";
        return $this;
    }

    protected abstract function addMeat();
}
