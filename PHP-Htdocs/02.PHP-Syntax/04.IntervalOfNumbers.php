<?php

$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));

$startingNumber = $numberOne < $numberTwo ? $numberOne : $numberTwo;
$endNumber = $numberOne > $numberTwo ? $numberOne: $numberTwo;

for ($i = $startingNumber; $i <= $endNumber; $i++) {
    echo $i . "\r\n";
}