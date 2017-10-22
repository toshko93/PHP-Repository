<?php
$people_count = intval(fgets(STDIN));
$package = trim(fgets(STDIN));

$hall_price = 0;
$hall_name = "";
$package_price = 0;
$discount = 0;

if ($people_count <= 120) {
    if ($people_count <= 50) {
        $hall_price = 2500;
        $hall_name = "Small Hall";
    } elseif ($people_count <= 100) {
        $hall_price = 5000;
        $hall_name = "Terrace";
    } else {
        $hall_price = 7500;
        $hall_name = "Great Hall";
    }

    if ($package == "Normal") {
        $discount = 5;
        $package_price = 500;
    } elseif ($package == "Gold") {
        $discount = 10;
        $package_price = 750;
    } elseif ($package_price == "Platinum") {
        $discount = 15;
        $package_price = 1000;
    }

    $price = $hall_price + $package_price;
    $discounted_price = $price - ($price * ($discount / 100));
    $price_per_person = number_format($discounted_price / $people_count, 2);

    $output = "We can offer you the $hall_name. \r\nThe price per person is $price_per_person$";
} else {
    $output = "We do not have an appropriate hall.";
}

echo $output;