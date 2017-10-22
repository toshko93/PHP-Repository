<?php

include "student-form.php";

if (isset($_GET['filter'])) {
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (!isset($_GET['page'])) {
        $_GET['page'] = 1;
        $actual_link = $actual_link . "page=1";
    }


    $delimeter = $_GET['delimeter'];
    $names = $_GET['names'];
    $ages = $_GET['ages'];

    $namesArray = explode("$delimeter ", $names);
    $agesArray = explode("$delimeter ", $ages);

    $studentsCount = count($namesArray);
    $studentsPerPage = 5;
    $maxPages = ceil($studentsCount / $studentsPerPage);

    $currentPage = $_GET['page'];

    var_dump($currentPage);

    $studentsArray = array_combine($namesArray, $agesArray);

    $show = array_slice($studentsArray ,$studentsPerPage * ($currentPage - 1) , $studentsPerPage);

    if (isset($namesArray, $agesArray)): ?>

        <table border="1" cellpadding="0">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($show as $studentName => $studentAge):
                //if ($agesArray[$i] >= 18): ?>
                <tr>
                    <td><?php echo $studentName ?></td>
                    <td><?php echo $studentAge ?></td>
                </tr>
                <?php //endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>

        <!--Table pagination-->
        <?php

        $pagesCount = count($studentsArray) / 5;
        $pagesCount = ceil($pagesCount); ?>

        <a href="<?php if ($currentPage != 1) { echo str_replace("page=$currentPage", "page=" . ($currentPage - 1), $actual_link); } echo $actual_link; ?>" <?php if ($currentPage == 1) { echo "class=\"disabled\""; } ?> style="text-decoration: none;">Previous</a>

        <?php for ($y = 1; $y <= $pagesCount; $y++) {
            $actual_link = str_replace("page=$y", "page=$currentPage", $actual_link); ?>
            <a href="<?php echo $actual_link ?>" <?php if ($_GET['page'] == $y) { ?> class="disabled"; <?php } ?> style="text-decoration: none;"><?php echo $y; ?></a>
        <?php } ?>

        <a href="<?php if ($currentPage != $maxPages) { echo str_replace("page=$currentPage", "page=" . ($currentPage + 1), $actual_link); } echo $actual_link; ?>" <?php if ($_GET['page'] == $maxPages) { echo "class=\"disabled\""; } ?> style="text-decoration: none;">Next</a>

    <?php endif;
} ?>

<style>
    .disabled {
        pointer-events: none;
        cursor: default;
    }
</style>