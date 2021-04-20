<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="OefeningVermenigvuldiging.php" method="post">
<div class="form-row">
    <label for="vermenigvuldiging">Selecteer je tabel</label>
    <select name="vermenigvuldiging" id="vermenigvuldiging">
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select>

</div>
    <div>
        <input type="submit" value="Test!">
    </div>
</form>
</body>
<?php
echo "<table border='1'>\n";
$grootte = $_POST['vermenigvuldiging'];
for ($i = 1; $i <=$grootte; $i++) {
    echo "<tr>/n";
    for ($j = 1; $j <= $grootte; $j++) {
        echo  "<td>" . $i . "x" . $j . "=" . ($i * $j) . "</td>\n";
    }
    echo "</tr>\n";
}
echo  "</table>\n";
?>
</html>