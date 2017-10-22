<?php
$string = "Todor";
$int = 4;
$float = 3.14;
$array = array("Red", "Blue", "Green");
$object = (object)[4,23];

$variables = array($string, $int, $float, $array, $object);

foreach ($variables as $variable) {
    checkVar($variable);
}

function checkVar($variable) {
    if (is_numeric($variable)) {
        var_dump($variable);
    }
    else {
        echo gettype($variable) . "<br/>";
    }
}