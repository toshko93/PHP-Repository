<?php

class Car extends Vehicle {
    private $brand;
    private $model;
    private $year;

    function __construct($number_doors, $color, $brand, $model, $year) {
        parent::__construct($number_doors, $color);

        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    function setColor($value) {
        $this->color = $value;
    }

    public function paint($paint_color){
        parent::setColor($paint_color);
    }
}