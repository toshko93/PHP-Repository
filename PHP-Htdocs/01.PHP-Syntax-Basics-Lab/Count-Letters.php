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

foreach ($letters as $letter => $count) {
    if (ctype_alpha($letter)) {
        echo "$letter -> $count \n";
    }
}