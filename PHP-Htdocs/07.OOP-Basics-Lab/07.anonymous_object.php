<?php

$my_anonymous_object = new stdClass();

$my_anonymous_object->name = "Person";
$my_anonymous_object->age = 25;
$my_anonymous_object->single = true;
$my_anonymous_object->job = "Developer";

foreach ($my_anonymous_object as $key => $value) {
    echo "$key -> $value\r\n";
}