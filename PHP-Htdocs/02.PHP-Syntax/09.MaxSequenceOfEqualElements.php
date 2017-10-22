<?php

$input_sequence = fgets(STDIN);

$best_sequence_start = 0;
$best_sequence_length = 1;
$best_sequence_number = $input_sequence[0];

$previous_number = $input_sequence[0];

$current_sequence_start = 0;
$current_sequence_length = 1;

for ($i = 2; $i < strlen($input_sequence); $i += 2) {
    $current_number = $input_sequence[$i];

    if ($current_number === $previous_number) {
        $current_sequence_length++;
    } else {
        $current_sequence_start = $i;
        $current_sequence_length = 1;
    }

    if ($current_sequence_length > $best_sequence_length) {
        $best_sequence_length = $current_sequence_length;
        $best_sequence_number = $current_number;
        $best_sequence_start = $current_sequence_start;
    }

    $previous_number = $current_number;
}

echo substr($input_sequence, $best_sequence_start, $best_sequence_length * 2);