<?php

class Car {
    private $brand;
    private $model;
    private $year;
    private $extra_details;

    function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    function setYear($year) {
        if (is_numeric($year) && strlen($year) == 4) {
            $this->year = $year;
        }
    }

    function setExtraDetails($extra_details) {
        $this->extra_details = $extra_details;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getExtraDetails() {
        return "Engine: " . $this->extra_details->engine
            . "\r\nNumber of seats: " . $this->extra_details->number_of_seats
            . "\r\nHorse powers: " . $this->extra_details->horse_powers;
    }
}

class ExtraDetails {
    private $engine;
    private $number_of_seats;
    private $horse_power;

    function __construct($engine, $number_of_seats, $horse_power) {
        $this->engine = $engine;
        $this->number_of_seats = $number_of_seats;
        $this->horse_power = $horse_power;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function getNumberOfSeats() {
        return $this->number_of_seats;
    }

    public function getHorsePower() {
        return $this->horse_power;
    }
}

// First 4 tasks code
//
//for ($i = 0; $i < 4; $i++) {
//    $input_car = trim(fgets(STDIN));
//
//    $current_car = explode(' ', $input_car);
//
//    $car = new Car($current_car[0], $current_car[1]);
//    $car->setYear($current_car[2]);
//
//    $cars[] = $car;
//}
//
//usort($cars, function ($a, $b) {
//    if ($a->getBrand() == $b->getBrand()) {
//        if ($a->getModel() == $b->getModel()) {
//            if ($a->getYear() == $b->getYear()) {
//                return 0;
//            }
//        }
//    }
//    else {
//        return 1;
//    }
//});
//
//foreach ($cars as $car) {
//    echo $car->getBrand() . "," . $car->getModel() . "," . $car->getYear() . "\r\n";
//}

// 5th task code
//

$my_car = new Car("Audi", "A5");
$my_car->setYear(2015);

$my_car_extra_details = new ExtraDetails("Best Engine Ever", 5, 150);

$my_car->setExtraDetails($my_car_extra_details);

var_dump($my_car);