<?php

$word = fgets(STDIN);

$letters = [];

for ($i = 0; $i < strlen($word); $i++) {
    $currentLetter = $word[$i];

    if (!array_key_exists($currentLetter, $letters)) {
        $letters[$currentLetter] = 0;
    }

    $letters[$currentLetter]++;
}

array_multisort($letters, SORT_DESC, array_keys($letters));

foreach ($letters as $letter => $count) {
    if (ctype_alpha($letter)) {
        echo "$letter -> $count \n";
    }
}