<?php

$input = trim(fgets(STDIN));

isPalindrome($input);

function isPalindrome($string_to_check) {
    $reverse_string = strrev($string_to_check);

    if ($string_to_check == $reverse_string) {
        echo 'true';
    } else {
        echo 'false';
    }
}