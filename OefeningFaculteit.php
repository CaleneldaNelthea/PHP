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
<form action="Faculty.php" method="post">
    <div>
        <label for="number">number:</label>
        <input type="text" id="number" name="number" value="<?= $number ?>">
    </div>
    <div>
        <input type="submit" value="Test!">
    </div>
</form>
<?php
$help =1;
for ($i = 1; $i <= $number; $i = $i +1) {
    $help = $help*$i;
}
print "Faculty " . $help

?>

</body>
</html>