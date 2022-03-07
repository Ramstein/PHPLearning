<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Learning</title>
</head>

<body>
<form action="array.php" method="post">
    Grades: <input type="text" name="student"><br>
    <input type="submit">
    <hr>
</form>


<?php

$friends = array("Kevin", "Oscar", "karen", "jim");
$friends[1] = 400;
$friends[1] = "Dwight";

$friends[4] = "Angela";

echo $friends[4];
echo count($friends) . "<hr>";


// Associative Arrays
$grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");

$grades['Jim'] = "D+";
echo $grades["Jim"];

echo $grades[$_POST['student']] . '<hr>';


function sayHi($name, $age)
{
    echo "Hello $name. Your age is $age<br>";
}

sayHi("Ramstein", 12);
sayHi("Tom", 16);
sayHi("Dave", 14);

function cube($num)
{
    return $num * $num * $num;
}

$cube_of_3 = cube(3);
echo "The cube of 3 is $cube_of_3<br>";

?>

</html>




