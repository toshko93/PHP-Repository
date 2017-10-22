<?php

$input_line = trim(fgets(STDIN));

$users_passwords = array();

while ($input_line != 'login') {
    $current_user = explode(' -> ', $input_line);

    $users_passwords[$current_user[0]] = $current_user[1];

    $input_line = trim(fgets(STDIN));
}

$input_line = trim(fgets(STDIN));

$unsuccessful_login_attempts = 0;

while ($input_line != 'end') {
    $current_user = explode(' -> ', $input_line);

    if ($users_passwords[$current_user[0]] == $current_user[1]) {
        echo $current_user[0] . ": logged in successfully\r\n";
    }
    else {
        echo $current_user[0] . ": login failed\r\n";
        $unsuccessful_login_attempts++;
    }

    $input_line = trim(fgets(STDIN));
}

echo "unsuccessful login attempts: $unsuccessful_login_attempts";