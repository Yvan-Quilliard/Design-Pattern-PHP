<?php

namespace App\Factory;

use App\Interfaces\VehicleInterface;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\Bicycle;

class VehicleFactory
{
    public static function createVehicle(string $type, $costPerKm, $fuelType): VehicleInterface
    {
        return match ($type) {
            'car' => new Car($costPerKm, $fuelType),
            'truck' => new Truck($costPerKm, $fuelType),
            'bicycle' => new Bicycle($costPerKm, $fuelType),
            default => throw new \InvalidArgumentException('Vehicle type not found'),
        };
    }

    //Vous pourrez dans un second temps créer une deuxieme methode dans cette Factory pour obtenir un vehicule en fonction de la distance et du poids transporter (si <20km, c'est le velo, sinon c'est la voiture. Si il y a plus de 20kg ça sera la voiture et si plus de 200kg le camion.)
    public static function createVehicleByDistanceAndWeight(int $distance, int $weight): VehicleInterface
    {
        return match (true) {
            $distance < 20 && $weight < 20 => new Bicycle(0.1, 'muscle'),
            $distance < 20 && $weight >= 20 => new Car(0.5, 'electric'),
            $distance >= 20 && $weight < 200 => new Car(0.5, 'electric'),
            $distance >= 20 && $weight >= 200 => new Truck(0.3, 'diesel'),
            default => throw new \InvalidArgumentException('Vehicle type not found'),
        };
    }
}