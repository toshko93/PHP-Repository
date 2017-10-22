<?php

$input_string = trim(fgets(STDIN));
$input_string_length = strlen($input_string);

if ($input_string_length >= 20) {
    $output = substr($input_string, 0, 20);
} elseif ($input_string_length < 20) {
    $output = $input_string . str_repeat("*",20 - $input_string_length);
}

echo $output;