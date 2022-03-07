<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Learning</title>
</head>

<body>
<form action="url_para.php" method="post">
    Password: <input type="password" name="password">
    <br>
    <input type="submit">
    <hr>
</form>

<?php
$password = $_POST['password'];

echo "Roses are $password <br>";

?>
</body>

</html>

