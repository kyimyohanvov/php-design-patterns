<?php

namespace Kyimyohan\PhpDesignPatterns\AdapterPattern;

class ModernCar implements ModernCarInterface
{
    public function pushButton()
    {
        return "Modern car engine is running";
    }
}
