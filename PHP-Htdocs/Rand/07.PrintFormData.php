<?php
if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["gender"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    echo "My name is " . $name . ". Im " . $age . " years old. Im " . $gender . ".";
}

