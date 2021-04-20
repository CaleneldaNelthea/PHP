<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function isValidNumber($text) {
    return isset($text) && is_numeric($text);
}

function getWaarde($getal1, $getal2, $getal3, $term) {
    if ($term == "hoogste") {
        return max($getal1, $getal2,$getal3) ;
    } else {
        return min($getal1, $getal2, $getal3);
    }
}

if (isset($_POST[verzend])) {
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];
    $getal3 = $_POST['getal3'];
    $term1 = $_POST['term1'];
    $term2 = $_POST['term2'];
    $operator = $term['operator'];
    if (isValidNumber($getal1) && isValidNumber($getal2) && isValidNumber($getal3) && isset($term1) && isset($term2) && isset($operator)) {
        $waarde1 = getWaarde($getal1, $getal2, $getal3, $term1);
        $waarde2 = getWaarde($getal1, $getal2, $getal3, $term2);
        if ( ($operator == "min")) {
            $result = $waarde1 - $waarde2;
        } else {
            $result = $waarde1 + $waarde2;
        }
        echo "($getal1, $getal2, $getal3,$term1, $term2, $operator)=$result";
        }
        else {
        echo "ongeldige invoer.";
        }
}
?>
</body>
</html>