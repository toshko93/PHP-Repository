<?php

include "input_form.php";

if (isset($_GET['input'])) {
    $input_string = $_GET['input'];

    $output = '';

    for ($i = 0; $i < strlen($input_string); $i++) {
        $current_char = $input_string[$i];

        if (ord($current_char) % 2 == 0) {
            // Red
            $output .= "<span class='red'>$current_char </span>";
        }
        else {
            // Blue
            $output .= "<span class='blue'>$current_char </span>";
        }
    }

    echo "<br/>" . $output;
}