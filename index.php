<?php

use Kyimyohan\PhpDesignPatterns\DecoratorPattern\Decorator;
use Kyimyohan\PhpDesignPatterns\DecoratorPattern\BubbleTea;

require 'vendor/autoload.php';


$decorator = new Decorator(new BubbleTea);

echo $decorator->getPrice();
