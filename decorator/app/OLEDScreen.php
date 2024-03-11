<?php

namespace App;

use App\Computer;

class OLEDScreen implements Computer
{
    protected Computer $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 200;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . "with an OLED screen.";
    }
}