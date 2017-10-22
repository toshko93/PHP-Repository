<?php

$speed = intval(fgets(STDIN));
$zone = fgets(STDIN);

isWithinSpeedLimit($speed, $zone);

function isWithinSpeedLimit($speed, $area) {
    $limit = getLimit($area);

    if ($speed >= $limit) {
        getInfraction($speed, $limit);
    }
}

function getLimit($zone) {
    switch ($zone) {
        case 'motorway':
            $speedLimit = 130;
            break;
        case 'interstate':
            $speedLimit = 90;
            break;
        case 'city':
            $speedLimit = 50;
            break;
        case 'residential':
            $speedLimit = 20;
            break;
        default:
            echo 'Not a valid input';
            $speedLimit = 130;
    }

    return $speedLimit;
}

function getInfraction($speed, $limit) {
    $overSpeed = $speed - $limit;

    if ($overSpeed <= 20) {
        echo 'speeding';
    } else if ($overSpeed <= 40){
        echo 'excessive speeding';
    } else {
        echo 'reckless driving';
    }
}