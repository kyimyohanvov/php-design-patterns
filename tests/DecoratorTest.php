<?php

namespace Kyimyohan\PhpDesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Decorator;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\BubbleTea;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Jelly;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Pudding;

class DecoratorTest extends TestCase
{
    /** @test */
    public function it_return_bubble_tea_price_and_description()
    {
        $decorator = new Decorator(new BubbleTea);

        $this->assertSame(10, $decorator->getPrice());
        $this->assertSame("Bubble Tea, ", $decorator->getDescription());
    }

    /** @test */
    public function it_return_bubble_tea_plus_jelly_price_and_description()
    {
        $decorator = new Decorator(new Jelly(new BubbleTea));

        $this->assertSame(12, $decorator->getPrice());
        $this->assertSame("Bubble Tea, Jelly, ", $decorator->getDescription());
    }

    /** @test */
    public function it_return_bubble_tea_plus_pudding_price_and_description()
    {
        $decorator = new Decorator(new Pudding(new BubbleTea));

        $this->assertSame(15, $decorator->getPrice());
        $this->assertSame("Bubble Tea, Pudding, ", $decorator->getDescription());
    }

    /** @test */
    public function it_return_bubble_tea_plus_jelly_plus_pudding_price_and_description()
    {
        $decorator = new Decorator(new Pudding(new Jelly(new BubbleTea)));

        $this->assertSame(17, $decorator->getPrice());
        $this->assertSame("Bubble Tea, Jelly, Pudding, ", $decorator->getDescription());
    }
}
