<?php

class Box {
    private $length;
    private $width;
    private $height;

    function __construct($length, $width, $height) {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    private function setLength($length) {
        if ($length <= 0) {
            throw new Exception("Length cannot be zero or negative!");
        } else {
            $this->length = $length;
        }
    }

    private function setWidth($width) {
        if ($width <= 0) {
            throw new Exception("Width cannot be zero or negative!");
        } else {
            $this->width = $width;
        }
    }

    private function setHeight($height) {
        if ($height <= 0) {
            throw new Exception("Height cannot be zero or negative!");
        } else {
            $this->height = $height;
        }
    }


    function surfaceArea() {
        return number_format(round(2 * ($this->length * $this->width) +
               2 * ($this->length * $this->height) +
               2 * ($this->height * $this->width), 2), 2);
    }

    function lateralSurface() {
        return number_format(round($this->surfaceArea() - 2 * ($this->length * $this->width), 2), 2);
    }

    function volume() {
        return number_format(round($this->length * $this->width * $this->height, 2), 2);
    }
}



$input_length = intval(fgets(STDIN));
$input_width = intval(fgets(STDIN));
$input_height = intval(fgets(STDIN));

$box = new Box($input_length, $input_width, $input_height);

echo "Surface area: " . $box->surfaceArea() . "\r\n";
echo "Lateral surface area: " . $box->lateralSurface() . "\r\n";
echo "Volume: " . $box->volume() . "\r\n";