<?php

$input = trim(fgets(STDIN));

$people_and_phones = array();

while ($input != "Over") {
    $current_person = explode(' : ', $input);

    if (is_numeric($current_person[0])) {
        $people_and_phones[$current_person[1]] = $current_person[0];
    }
    else {
        $people_and_phones[$current_person[0]] = $current_person[1];
    }

    $input = trim(fgets(STDIN));
}

ksort($people_and_phones);

var_dump($people_and_phones);