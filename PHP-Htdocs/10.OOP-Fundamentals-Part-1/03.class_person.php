<?php

class Person {
    private $name;
    private $money;
    private $bag_of_products = array();

    function __construct($name, $money) {
        $this->setName($name);
        $this->setMoney($money);
    }

    private function setName($name) {
        if (!strlen($name) == 0) {
            $this->name = $name;
        } else {
            throw new Exception("Name cannot be empty");
        }
    }

    private function setMoney($money) {
        if ($money >= 0) {
            $this->money = $money;
        } else {
            throw new Exception("Money cannot be negative");
        }
    }

    public function buyProduct($product, $cost) {
        if ($this->money >= $cost) {
            if ($this->bag_of_products[$product] == 0) {
                $this->bag_of_products[$product] = 1;
            }
            else {
                $this->bag_of_products[$product]++;
            }
            $this->setMoney($this->money - $cost);

            echo $this->name . " bought " . $product;
        }
        else {
            echo $this->name . " cannot afford " . $product;
        }
    }
}