<?php

$inputNumber = intval(fgets(STDIN));

if ($inputNumber < 100) {
    echo "No";
}
else {
    $limit = $inputNumber < 1000 ? $inputNumber : 1000;

    for ($i = 100; $i <= $limit; $i++) {
        checkIfNonRepeatedDigits($i);
    }
}

function checkIfNonRepeatedDigits($number) {
    $string = (string)$number;
    $ones = $string[2];
    $tens = $string[1];
    $hundreds = $string[0];

    if ($ones != $tens && $ones != $hundreds && $tens != $hundreds) {
        echo $number . " ";
    }
}