<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        #tekst {
            height: 200px;
            width: 150px;
        }

        <?php include("procesInput.php") ?>
        body {
            background-color: <?php echo $color ?>;
        }

    </style>
</head>
<body>
<form action="procesInput.php" method="post">
    <div>
        <label for="title">Title</Tabel>
        <input type="text" name="title" Td="title">    </div>
    <div>
        <label for="tekst">Tekst</label>
        <input type="text" name="tekst" id="tekst">
    </div>
    <div>
        <input type="button" name="Send" value="Send">
    </div>
    <div>
        <select name="color" id="color">
            <option value="White">White</option>
            <option value="Black">Black</option>
            <option value="Red">Red</option>
            <option value="Bleu">Bleu</option>
        </select>
        <input type="button" name="Chose" value="Chose">
    </div>

</form>

</body>
</html>