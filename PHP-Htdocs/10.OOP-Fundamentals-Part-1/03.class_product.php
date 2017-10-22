<?php

class Product {
    private $name;
    private $cost;

    public function __construct($name, $cost) {
        $this->setName($name);
        $this->setCost($cost);
    }

    private function setName($name) {
        if (!strlen($name) == 0) {
            $this->name = $name;
        } else {
            throw new Exception("Name cannot be empty");
        }
    }

    private function setCost($cost) {
        if ($cost >= 0) {
            $this->cost = $cost;
        } else {
            throw new Exception("Cost cannot be negative");
        }
    }
}