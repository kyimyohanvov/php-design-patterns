<?php

namespace Kyimyohan\PhpDesignPatterns\StrategyPattern;

class MailGun implements Mailer
{
    public function send($data)
    {
        return "MailGun: " . $data;
    }
}
