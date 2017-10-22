<?php

$input_line = trim(fgets(STDIN));

$ages_array = array();
$salary_array = array();
$position_array = array();

while ($input_line != 'filter base') {
    $current_input_line = explode(' -> ', $input_line);

    if (is_numeric($current_input_line[1])) {
        if (isFloat($current_input_line[1])) {
            $salary_array[$current_input_line[0]] = $current_input_line[1];
        }
        else {
            $ages_array[$current_input_line[0]] = $current_input_line[1];
        }
    }
    else {
        $position_array[$current_input_line[0]] = $current_input_line[1];
    }

    $input_line = trim(fgets(STDIN));
}

//var_dump($ages_array);
//var_dump($salary_array);
//var_dump($position_array);

$input_line = trim(fgets(STDIN));

if ($input_line == 'Age') {
    foreach ($ages_array as $person => $age_element) {
        echo "Name: $person\r\nAge: $age_element\r\n====================\r\n";
    }
}
else if ($input_line == 'Salary') {
    foreach ($salary_array as $person => $salary_element) {
        echo "Name: $person\r\nSalary: $salary_element\r\n====================\r\n";
    }
}
else if ($input_line == 'Position') {
    foreach ($position_array as $person => $position_element) {
        echo "Name: $person\r\nPosition: $position_element\r\n====================\r\n";
    }
}

function isFloat($value){
    return ((int)$value != $value) ;
}
