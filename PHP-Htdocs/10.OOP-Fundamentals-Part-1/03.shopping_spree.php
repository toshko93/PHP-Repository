<?php

require "03.class_person.php";
require "03.class_product.php";

$people_input_string = explode(';', trim(fgets(STDIN)));
$products_input_string = explode(';', trim(fgets(STDIN)));

$people_money_array = array();
$products_costs_array = array();

foreach ($people_input_string as $person_string) {
    $current_person = explode('=', $person_string);

    if ($current_person[0] != '') {
        $person_instance = new Person($current_person[0], $current_person[1]);
        $people_money_array[$current_person[0]] = $person_instance;
    }
}

foreach ($products_input_string as $product_string) {
    $current_product = explode('=', $product_string);

    if ($current_product[0] != '') {
        $product_instance = new Product($current_product[0], $current_product[1]);
        $products_costs_array[$current_product[0]] = $product_instance;
    }
}

print_r($people_money_array);
print_r($products_costs_array);

// Here orders start comming
$purchase_order_input = explode(' ', trim(fgets(STDIN)));

while ($purchase_order_input != 'END') {
    $current_person_buying = $people_money_array[$purchase_order_input[0]];
    $current_product_bought = $products_costs_array[$purchase_order_input[1]];

    print_r($current_person_buying);
    print_r($current_product_bought);

    $current_person_buying

    //$current_person_buying->buyProcuts($current_product_bought);

    $purchase_order_input = explode(' ', trim(fgets(STDIN)));
}