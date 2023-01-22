<?php

namespace Kyimyohan\PhpDesignPatterns\StrategyPattern;

class Mandrill implements Mailer
{
    public function send($data)
    {
        return "Mandrill: " . $data;
    }
}
