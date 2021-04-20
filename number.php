<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="procesNumber.php" method="post">
    <div>
        <label for="number1">number 1:</label>
        <input type="text" name="number1" id="number1" />
    </div>
    <div>
        <label for="number2">number 2:</label>
        <input type="text" name="number2" id="number2" />
    </div>
    <div>
        <label for="number3">number 3:</label>
        <input type="text" name="number3" id="number3" />
    </div>
    <div>
        <select name="term">
            <option>highest</option>
            <option>lowest</option>
        </select>
        <select name="operator">
            <option value="plus">+</option>
            <option value="min">-</option>
        </select>
        <select name="term">
            <option>highest</option>
            <option>lowest</option>
        </select>
    </div>
    <div>
        <input type="button" name="send">
    </div>
</form>

</body>
</html>