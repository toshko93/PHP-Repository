<?php

$input_string = trim(fgets(STDIN));
$elements = explode(', ', $input_string);
$result_array = array();

for ($i = 0; $i < count($elements); $i++) {
    $current_element = $elements[$i];

    if (isset($result_array[$current_element])) {
        $result_array[$current_element]++;
    } else {
        $result_array[$current_element] = 1;
    }
}

foreach ($result_array as $element => $count) {
    if ($count == 1) {
        echo "$element ";
    }
}