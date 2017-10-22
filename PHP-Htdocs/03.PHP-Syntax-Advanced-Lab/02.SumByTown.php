<?php

$input_string = fgets(STDIN);
$input_array = explode(', ', $input_string);
$result_array = array();

for ($i = 0; $i < count($input_array); $i += 2) {
    $current_town = $input_array[$i];
    $current_number = intval($input_array[$i + 1]);

    if (isset($result_array[$current_town])) {
        $result_array[$current_town] += $current_number;
    } else {
        $result_array[$current_town] = $current_number;
    }
}

print_r($result_array);