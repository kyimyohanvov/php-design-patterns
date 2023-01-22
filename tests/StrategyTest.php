<?php

namespace Kyimyohan\PhpDesignPatterns\Tests;

use Kyimyohan\PhpDesignPatterns\StrategyPattern\App;
use Kyimyohan\PhpDesignPatterns\StrategyPattern\MailGun;
use Kyimyohan\PhpDesignPatterns\StrategyPattern\Mandrill;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    /** @test */
    public function it_send_mail_with_mailgun()
    {
        $app = new App;
        $this->assertSame("MailGun: Hello", $app->sendMailWith(new MailGun, "Hello"));
    }

    /** @test */
    public function it_send_mail_with_mandrill()
    {
        $app = new App;
        $this->assertSame("Mandrill: Hello", $app->sendMailWith(new Mandrill, "Hello"));
    }
}
