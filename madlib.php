<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Learning</title>
</head>

<body>
<form action="madlib.php" method="get">
    Color: <input type="text" name="color">
    <br>
    Plural Noun: <input type="text" name="pluralNoun">
    <br>
    Celebrity: <input type="text" name="celebrity">
    <br>
    <input type="submit">
    <hr>
</form>

<?php
$color = $_GET['color'];
$pluralNoun = $_GET['pluralNoun'];
$celebrity = $_GET['celebrity'];

echo "Roses are $color <br>";
echo "$pluralNoun are blue<br>";
echo "I love $celebrity<br>"

?>
</body>

</html>

