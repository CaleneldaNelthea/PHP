<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$getal = 0;
if (isset($_POST['getal'])) {
    $getal = $_POST['getal'];
}
?>
<form action="OefeningFaculteit.php" method="post">
    <div>
        <label for="getal">Getal:</label>
        <input type="text" id="getal" name="getal" value="<?= $getal ?>">
    </div>
    <div>
        <input type="submit" value="Test!">
    </div>
</form>
<?php
$hulp =1;
for ($i = 1; $i <= $getal; $i = $i +1) {
    $hulp = $hulp*$i;
}
print "Faculteit " . $hulp

?>

</body>
</html>