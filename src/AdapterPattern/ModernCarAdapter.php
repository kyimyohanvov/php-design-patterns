<?php

namespace Kyimyohan\PhpDesignPatterns\AdapterPattern;

class ModernCarAdapter implements ModernCarInterface
{
    private $oldCar;
    public function __construct(OldCarInterface $oldCar)
    {
        $this->oldCar = $oldCar;
    }

    public function pushButton()
    {
        return $this->oldCar->turnKey();
    }
}
