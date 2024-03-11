<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

use App\Factory\VehicleFactory;

$car = VehicleFactory::createVehicle('car', 0.5, 'electric');
$truck = VehicleFactory::createVehicle('truck', 0.3, 'diesel');
$bicycle = VehicleFactory::createVehicle('bicycle', 0.1, 'muscle');

var_dump($car);
var_dump($truck);
var_dump($bicycle);

$carByDistanceAndWeight = VehicleFactory::createVehicleByDistanceAndWeight(10, 1);
$truckByDistanceAndWeight = VehicleFactory::createVehicleByDistanceAndWeight(20, 200);
$bicycleByDistanceAndWeight = VehicleFactory::createVehicleByDistanceAndWeight(20, 200);

var_dump($carByDistanceAndWeight);
var_dump($truckByDistanceAndWeight);
var_dump($bicycleByDistanceAndWeight);