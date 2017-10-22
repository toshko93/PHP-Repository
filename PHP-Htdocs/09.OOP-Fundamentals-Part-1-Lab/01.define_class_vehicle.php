<?php

require_once 'Car.php';

// Problems 1-3
// $my_vehicle = new Vehicle(2, "Orange");

// $my_vehicle->setNumberOfDoors(4);

// $my_vehicle->paint("Blue");

// var_dump($my_vehicle);


// Problem 4
$my_car = new Car(4, "Red", "Audi", "A4", 2016);

//print_r($my_car);

// Problem 6
$my_car->paint("Green");

//print_r($my_car);

// Problem 7
//$myCar->setDoors(15);

// Problem 8
$b1 = new Bicycle(0, "Green", "BigBike", "X7");
$b2 = new Bicycle(0, "Red", "BigBike", "X5");

$b1->Ride();
$b2->Stop();