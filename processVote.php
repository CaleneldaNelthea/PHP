<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>TEst</h1>
<h1>Your vote is being processed...</h1>
<?php
$age = $_POST['age'];
if ($age < 18) { ?>
<p>You are to young to vote</p>
<?php
} else {
print $_POST['name'] . " You voted for " . $_POST['vote'];
 }
?>
</body>
</html>