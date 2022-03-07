<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Learning</title>
</head>

<body>
<form action="calculator.php" method="get">
    Number 1 : <input type="number" name="num1">
    <br>
    Number 2: <input type="number" name="num2">
    <br>
    <hr>
    <input type="submit">
</form>

ANSWER: <?php echo $_GET['num1'] + $_GET['num2'] ?>
</body>

</html>

