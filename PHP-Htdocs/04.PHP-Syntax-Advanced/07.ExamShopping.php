<?php

$input_line = trim(fgets(STDIN));

$products_quantity = array();

while ($input_line != 'shopping time') {
    $current_line = explode(' ', $input_line);

    if (isset($products_quantity[$current_line[1]])) {
        $products_quantity[$current_line[1]] += $current_line[2];
    }
    else {
        $products_quantity[$current_line[1]] = $current_line[2];
    }

    $input_line = trim(fgets(STDIN));
}

$input_line = trim(fgets(STDIN));

while ($input_line != 'exam time') {
    $current_line = explode(' ', $input_line);

    if (!isset($products_quantity[$current_line[1]])) {
        echo $current_line[1] . " doesn`t exist\r\n";
    }
    else {
        if ($products_quantity[$current_line[1]] >= $current_line[2]) {
            $products_quantity[$current_line[1]] -= $current_line[2];
        }
        else {
            $products_quantity[$current_line[1]] = 0;
        }
    }

    $input_line = trim(fgets(STDIN));
}

foreach ($products_quantity as $product => $quantity) {
    if ($quantity > 0) {
        echo "$product -> $quantity\r\n";
    }
}