<?php

$input_string = fgets(STDIN);
$characters_to_remove = array('@', '$', '%', '*');

$final_scores = array();

while ($input_string != "Result") {
    // Split (explode) the 3 inputs and assign them to array
    $current_input = explode("|", $input_string);

    // Remove unnecessary symbols ('@', '$', '%', '*') from the TEAM and PLAYER variables
    $current_input[0] = str_replace($characters_to_remove, '', $current_input[0]);
    $current_input[1] = str_replace($characters_to_remove, '', $current_input[1]);
    $current_input[2] = intval($current_input[2]);

    // Check if the positions of TEAM and PLAYER are correct and asign to variables
    if($current_input[0] === strtoupper($current_input[0])) {
        $current_team = $current_input[0];
        $current_player = $current_input[1];
    } else {
        $current_player = $current_input[0];
        $current_team = $current_input[1];
    }

    $current_score = $current_input[2];

    //   Asign the 3 variables inside an array
    if (isset($final_scores[$current_team])) {
        if (isset($final_scores[$current_team][$current_player])) {
            $final_scores[$current_team][$current_player] += $current_score;
        } else {
            $final_scores[$current_team][$current_player] = $current_score;
        }
    }
    else {
        $final_scores[$current_team][$current_player] = $current_score;
    }

    // Iterate through the array

    foreach ($final_scores as $team => $players_scores) {
        // ToDo: Sort and display
    }

    var_dump($final_scores);

    $input_string = fgets(STDIN);
}