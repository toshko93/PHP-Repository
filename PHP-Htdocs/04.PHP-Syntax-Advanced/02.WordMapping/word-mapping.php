<?php

include "input-form.php";

if (isset($_GET['input'])) {
    $input_string = $_GET['input'];

    preg_match_all('/\w+(?:-\w+)*/m', $input_string, $input_words_array);

    var_dump($input_words_array[0]);

    //$input_words_array = explode(' ', $input_string);
    $words_array = array();

    for ($i = 0; $i < count($input_words_array[0]); $i++) {
        $current_word = strtolower($input_words_array[0][$i]);

        if (isset($words_array[$current_word])) {
            $words_array[$current_word] += 1;
        } else {
            $words_array[$current_word] = 1;
        }
    } ?>

    <table>

    <?php foreach ($words_array as $word => $count) {
        echo "<tr><td>$word</td><td>$count</td></tr>";
    } ?>

    </table>
<?php
}