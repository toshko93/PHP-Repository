<?php

class Bicycle extends Vehicle {
    private $brand;
    private $model;
    private $year;

    private $someone_is_riding;
    private $is_for_skirt;


    function __construct($number_of_doors = 0, $color, $brand, $model, $year) {
        parent::__construct($number_of_doors, $color);

        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->setNumberOfDoors($number_of_doors);
    }

    function setNumberOfDoors($value) {
        $this->number_doors = $value;
    }

    function Ride() {
        $this->someone_is_riding = true;
    }

    function Stop() {
        $this->someone_is_riding = false;
    }

    function __toString(){
        return "Bicycle";
    }
}