<?php

namespace App\Entity;

use App\Interfaces\VehicleInterface;

class Car implements VehicleInterface {
    private $costPerKm;
    private $fuelType;

    public function __construct($costPerKm, $fuelType) {
        $this->costPerKm = $costPerKm;
        $this->fuelType = $fuelType;
    }

    public function getCostPerKm(): VehicleInterface {
        return $this->costPerKm;
    }

    public function getFuelType(): VehicleInterface {
        return $this->fuelType;
    }
}