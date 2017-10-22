<?php

$input_string = trim(fgets(STDIN));

$input_numbers_array = explode(' ', $input_string);

$numbers_array = array();

for ($i = 0; $i < count($input_numbers_array); $i++) {
    $current_number = $input_numbers_array[$i];

    if (isset($numbers_array[$current_number])) {
        $numbers_array[$current_number] += 1;
    }
    else {
        $numbers_array[$current_number] = 1;
    }
}

ksort($numbers_array);

foreach ($numbers_array as $number => $count) {
    echo "$number -> $count times\r\n";
}