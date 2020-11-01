<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'Motorway.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'HighWay.php';



$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('red',5,'fuel', 500);

var_dump($truck);

echo $truck->getCharge();
?> <br> <?php
echo $truck->getStock();
?> <br> <?php
echo $truck->getIsFull();
?> <br> <?php
?> <br> <?php

$truck2 = new Truck('black',4,'fuel', 50);

$truck2->setCharge(100);

echo $truck2->getCharge();
?> <br> <?php
echo $truck2->getStock();
?> <br> <?php
?> <br> <?php
echo $truck2->getIsFull();


$motor = new Motorway();
$ped = new PedestrianWay();
$resident = new ResidentialWay();
$resident -> addVehicle($bicycle);
$resident -> addVehicle($truck);


$car= new Car('blue',4,'fuel', true);

var_dump($car);


var_dump($car->isHasParkBrake());

try {
$car->start();

} catch(Exception $e){
    $car->setHasParkBrake(false);
} finally {
            echo "Ma voiture roule comme un donut";
        }
var_dump($car->isHasParkBrake());
