<?php

namespace Kyimyohan\PhpDesignPatterns\Tests;

use Kyimyohan\PhpDesignPatterns\AdapterPattern\ModernCar;
use Kyimyohan\PhpDesignPatterns\AdapterPattern\ModernCarAdapter;
use Kyimyohan\PhpDesignPatterns\AdapterPattern\OldCar;
use PHPUnit\Framework\TestCase;
use Kyimyohan\PhpDesignPatterns\AdapterPattern\Person;

class AdapterTest extends TestCase
{
    /** @test */
    public function it_return_engine_starting_message_from_modern_car()
    {
        $person = new Person();
        $this->assertSame("Modern car engine is running", $person->drive(new ModernCar));
    }

    /** @test */
    public function it_return_engine_starting_message_from_old_car()
    {
        $person = new Person();
        $this->assertSame(
            "Old car engine is running",
            $person->drive(new ModernCarAdapter(new OldCar))
        );
    }
}
