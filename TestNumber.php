<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$number = 0;
if (isset($_POST['number'])) {
    $number = $_POST['number'];
}
?>

<form action="Testnumber.php" method="post">
    <div>
        <label for="number">Number:</label>
        <input type="text" id="number" name="number" value="<?= $number ?>">
    </div>
    <div>
        <input type="submit" value="Test!">
    </div>
</form>
</body>
<?php
if ($number < 0) {
    if ($number % 2 == 0) {
    $c =  $number . " is negative and even";
    } else {
        echo $number . " is negative en uneven";
    }

if ($number > 10) {
echo $number . " is greater than 10";
} else {
    echo $number . " is between 0 and 10";

    }
}
?>
</html>