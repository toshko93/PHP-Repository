<?php

function nth_strpos($str, $substr, $n, $stri = false)
{
    if ($stri) {
        $str = strtolower($str);
        $substr = strtolower($substr);
    }
    $ct = 0;
    $pos = 0;
    while (($pos = strpos($str, $substr, $pos)) !== false) {
        if (++$ct == $n) {
            return $pos;
        }
        $pos++;
    }
    return false;
}

$input_string = fgets(STDIN);
$char_and_occurance = explode(" ", fgets(STDIN));

$char = $char_and_occurance[0];
$occurance = $char_and_occurance[1];

$occurances_array = array();

if (($nth = nth_strpos($input_string, $char, $occurance, true)) !== false) {
    $result = substr($input_string, $nth);
    echo strpos($input_string, $result);
} else {
    echo 'Find the letter yourself!';
}