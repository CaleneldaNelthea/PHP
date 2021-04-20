<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body id="body">
<?php



if (isset($_POST[$Send])) {

    if (isset($titel) && isset($tekst)) {

    echo strip_tags($title);
    echo strip_tags($text);
    } else {
        echo "Invalid input";
    }
}

if (isset($_POST['color'])) {
    state_cap(strtolower($_POST['color']));
}

    function background($color)
    {

        switch ($color) {
            case "white":
                $color = 'white';
                echo "<body style='background-color:white';>";
                break;
            case "black":
                $color = 'black';
                echo "<body style='background-color:black';>";
                break;
            case "red":
                $color = 'red';
                echo "<body style='background-color:red';>";
                break;
            case "bleu":
                $color = 'blue';
                echo "<body style='background-color:blue';>";
        }

    }
?>

</body>
</html>