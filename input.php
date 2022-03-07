<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Learning</title>
</head>

<body>
<form action="input.php" method="get">
    Name: <input type="text" name="username">
    <br>
    Age: <input type="text" name="age">
    <br>
    <hr>
    Your name is <?php echo $_GET['username'] ?>
    <br>
    Your age is <?php echo $_GET['age'] ?>
    <br>
    <input type="submit">
</form>
<?php echo $_GET["username"] ?>
</body>
</html>

