<?php

namespace Kyimyohan\PhpDesignPatterns\StrategyPattern;

class App
{
    public function sendMailWith(Mailer $mailer, $data)
    {
        return $mailer->send($data);
    }
}
