<?php
$name = "Todor";
$phoneNumber = "215-421-754";
$age = 24;
$address = "Hadji dimitar";

$result = "<table cellspacing='0' cellpadding='0'><tr><td>Name:</td><td>" . $name . "</td></tr><tr><td>Phone Number:</td><td>" . $phoneNumber . "</td></tr><tr><td>Age:</td><td>" . $age . "</td></tr><tr><td>Address:</td><td>" . $address . "</td></tr></table>";

echo $result;
?>

<style>
    table {
        border-collapse: collapse;
    }
    td {
        padding: 5px 10px;
        border: 1px solid black;
    }
    tr > td:first-child {
        font-weight: bold;
        background-color: #FF9C00;
    }
</style>