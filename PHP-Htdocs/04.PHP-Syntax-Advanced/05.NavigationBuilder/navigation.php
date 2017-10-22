<?php

include "input_form.php";

if (isset($_GET['categories']) && isset($_GET['tags']) && isset($_GET['months'])) {
    $input_string_categories = $_GET['categories'];
    $input_string_tags = $_GET['tags'];
    $input_string_months = $_GET['months'];
    $output = '';

    $categories = explode(', ', $input_string_categories);
    $tags = explode(', ', $input_string_tags);
    $months = explode(', ', $input_string_months);

    $output .= "<h2>Categories</h2><ul>";

    foreach ($categories as $category) {
        $output .= "<li>$category</li>";
    }

    $output .= "</ul><h2>Tags</h2><ul>";

    foreach ($tags as $tag) {
        $output .= "<li>$tag</li>";
    }

    $output .= "</ul><h2>Months</h2><ul>";

    foreach ($months as $month) {
        $output .= "<li>$month</li>";
    }

    $output .= "</ul>";

    echo $output;
}