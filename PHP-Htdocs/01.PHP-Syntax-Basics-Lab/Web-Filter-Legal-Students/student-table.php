<?php

include "student-form.php";

if (isset($_GET['filter'])) {
    $delimeter = $_GET['delimeter'];
    $names = $_GET['names'];
    $ages = $_GET['ages'];

    $namesArray = explode("$delimeter ", $names);
    $agesArray = explode("$delimeter ", $ages);

    if (isset($namesArray, $agesArray)): ?>

        <table border="1" cellpadding="0">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i = 0; $i < count($namesArray); $i++):
                if ($agesArray[$i] >= 18): ?>
                <tr>
                    <td><?php echo $namesArray[$i] ?></td>
                    <td><?php echo $agesArray[$i] ?></td>
                </tr>
                <?php endif; ?>
            <?php endfor; ?>
            </tbody>
        </table>

    <?php endif;
}
