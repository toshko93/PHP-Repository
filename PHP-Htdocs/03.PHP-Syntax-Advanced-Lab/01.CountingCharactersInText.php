<?php

$input_string = fgets(STDIN);
$chars_array = array();

for ($i = 0; $i < strlen($input_string); $i++) {
    $current_char = $input_string[$i];

    if ($current_char != ' ') {
        if (isset($chars_array[$current_char])) {
            $chars_array[$current_char] += 1;
        } else {
            $chars_array[$current_char] = 1;
        }
    }
}

print_r($chars_array);