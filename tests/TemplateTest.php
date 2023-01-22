<?php

namespace Kyimyohan\PhpDesignPatterns\Tests;

use Kyimyohan\PhpDesignPatterns\TemplatePattern\BeefBurger;
use Kyimyohan\PhpDesignPatterns\TemplatePattern\ChickenBurger;
use PHPUnit\Framework\TestCase;

class TemplateTest extends TestCase
{
    /** @test */
    public function it_return_chicken_burger()
    {
        $burger = new ChickenBurger;
        $burger->make();
        $this->assertSame("Bread + Chicken + Salad + Sauce", $burger->get());
    }


    /** @test */
    public function it_return_beef_burger()
    {
        $burger = new BeefBurger;
        $burger->make();
        $this->assertSame("Bread + Beef + Salad + Sauce", $burger->get());
    }
}
