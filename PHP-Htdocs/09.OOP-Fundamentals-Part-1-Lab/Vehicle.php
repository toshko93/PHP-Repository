<?php

class Vehicle {
    protected $number_doors;
    protected $color;

    function __construct($number_doors, $color) {
        $this->number_doors = $number_doors;
        $this->color = $color;
    }

    function __get($property) {
        if ($this->{$property}) {
            return $this->{$property};
        } else {
            return "Property doesn't exists";
        }
    }

    function getNumberOfDoors() {
        return $this->number_doors;
    }

    function getColor() {
        return $this->color;
    }

    protected function setNumberOfDoors($value) {
        $this->number_doors = $value;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function paint($new_color) {
        $this->setColor($new_color);
    }
}