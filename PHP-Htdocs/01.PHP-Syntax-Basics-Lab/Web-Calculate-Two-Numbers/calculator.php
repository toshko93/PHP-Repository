<?php

if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $numberOne = $_GET['number-one'];
    $numberTwo = $_GET['number-two'];
    $output = "";

    if ($operation == "sum") {
        $output = "$numberOne + $numberTwo = " . ($numberOne + $numberTwo);
    } else if ($operation == "substract") {
        $output = "$numberOne - $numberTwo = " . ($numberOne - $numberTwo);
    } else {
        $output = "Invalid operation supplied!";
    }
}

include 'calculator_frontend.php';