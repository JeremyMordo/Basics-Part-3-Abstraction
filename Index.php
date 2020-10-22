<?php

require 'Vehicle.php';
require 'HighWay.php';

$MotorWay = new MotorWay();
$PedestrianWay = new PedestrianWay();
$ResidentialWay = new ResidentialWay();

$Car = new Car('red', 2, 1);
$Bike = new Bike ('blue', 3, 1);
$SkateBoard = new Skateboard('black', 4, 3);

echo "1)";
$MotorWay->addVehicle($Car)."<br/>";
echo "2)";
$MotorWay->addVehicle($Bike)."<br/>";
echo "3)";
$MotorWay->addVehicle($SkateBoard)."<br/>";

echo "4)";
$PedestrianWay->addVehicle($Car)."<br/>";
echo "5)";
$PedestrianWay->addVehicle($Bike)."<br/>";
echo "6)";
$PedestrianWay->addVehicle($SkateBoard)."<br/>";

echo "7)";
$ResidentialWay->addVehicle($Car)."<br/>";
echo "8)";
$ResidentialWay->addVehicle($Bike)."<br/>";
echo "9)";
$ResidentialWay->addVehicle($SkateBoard)."<br/>";

