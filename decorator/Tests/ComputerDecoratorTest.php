<?php

namespace Test;

use App\GPU;
use App\OLEDScreen;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $lap = new Laptop();
        $gpu = new GPU($lap);
        $this->assertSame(500, $gpu->getPrice());
    }

    public function testLaptopWithOLEDScreen()
    {
        $lap = new Laptop();
        $oled = new OLEDScreen($lap);
        $this->assertSame(600, $oled->getPrice());
    }

    public function testLaptopWithGPUAndOLEDScreen()
    {
        $lap = new Laptop();
        $gpu = new GPU($lap);
        $oled = new OLEDScreen($gpu);
        $this->assertSame(700, $oled->getPrice());
    }
}