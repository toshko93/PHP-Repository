<!DOCTYPE html>
<html>

<head>
    <title>Post Request Example</title>
</head>

<body>

<form action="14.GetFormData.php/" method="GET">
    <label>Name: <input name="name"/></label><br/>
    <label>Age: <input name="age"/></label><br/>
    <label>Gender:</label><br/>
    <label><input type="radio" name="gender" value="male">Male</label><br/>
    <label><input type="radio" name="gender" value="female">Female</label><br/>
    <input type="submit" name="submit" value="Submit" />
</form>

<?php
if (isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["gender"])) {
    $name = $_GET["name"];
    $age = $_GET["age"];
    $gender = $_GET["gender"];

    $result = "My name is " . $name . ". Im " . $age . " years old. Im " . $gender . ".";

    echo $result;
}
?>

</body>
</html>
