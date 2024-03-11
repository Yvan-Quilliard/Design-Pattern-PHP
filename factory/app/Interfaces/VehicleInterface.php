<?php

namespace App\Interfaces;

interface VehicleInterface
{
    function getCostPerKm(): VehicleInterface;
    function getFuelType(): VehicleInterface;
}