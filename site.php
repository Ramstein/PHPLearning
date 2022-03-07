<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Learning</title>
</head>

<body>
<?php

echo "Hello World";
echo "<h1>Ramstein Site</h1>";
echo "<hr>";
echo "<p>This is my site</p><br>";

$characterName = "Tom";
$characterAge = 18;

echo "There once was a man named $characterName<br>";
echo "He was $characterAge years old <br>";
$characterName = "Mike";

echo "He really liked the name $characterName<br>";
echo "But didn't like being $characterAge<br>";

$phrase = "To be or not to be";
$age = 30;
$gpa = 32.9;
$isMale = false;
$null_val = null;

echo $gpa + $null_val;
echo "<hr>";

// working with strings

$phrase = "Giraffe Academy";
echo strtolower($phrase) . "<br>";
echo strtoupper($phrase) . "<br>";
echo strlen($phrase) . "<br>";
echo $phrase[1] . "<br>";

$phrase[0] = "B";
echo $phrase . "<br>";
$phrase = "Giraffe Academy";
echo str_replace('Giraffe', 'Panda', $phrase) . "<br>";
echo substr($phrase, 8) . "<br>";
echo "<hr>";

echo -40.8675 . "<br>";
echo 5 + 9;
echo "<br>";
$num = 10;
$num--; //-=, +=, *=, /=
echo $num;
echo "<br>";
echo abs(-100);
echo "<br>";
echo pow(2, 4);
echo "<br>";
echo sqrt(2);
echo "<br>";


echo max(2, 52);
echo "<br>";

echo min(2, 52);
echo "<br>";
echo round(52.455255);
echo "<br>";

echo ceil(52.655255);
echo "<br>";


echo floor(52.655255);
echo "<br>";
echo "<hr>";

?>
</body>
</html>

