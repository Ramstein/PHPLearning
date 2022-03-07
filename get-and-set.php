<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Learning</title>
</head>

<body>


<?php

class Movie
{
    //using visibility modifier public
    public $title;
    public $rating;

    function __construct($title, $rating)
    {
        $this->title = $title;
        $this->rating = $rating;
    }
}

//valid ratins are G, PG, PG-13, R , NR
$avengers = new Movie("Avengers", "PG-13");
// i can change the value of avenger right now

$avengers->rating = "Dog";

echo $avengers->rating;

class PrivateMovie
{
    private $title;
    private $rating;

    function __construct($title, $rating)
    {
        $this->title = $title;
        $this->setRating($rating);
    }

    function getRating()
    {
        return $this->rating;
    }

    function setRating($rating)
    {
        if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
            $this->rating = $rating;
        } else {
            $this->rating = "NR<br>";
        }
    }
}

//valid ratins are G, PG, PG-13, R , NR
$avengers2 = new PrivateMovie("Avengers", "agduihgia");
// i can change the value of avenger right now

$avengers2->setRating("PG<br>");

echo $avengers2->getRating();


// inheritance
class Chef
{
    function makeChicken()
    {
        echo "The Chef makes chicken <br>";
    }

    function makeSalad()
    {
        echo "The Chef makes salad <br>";
    }

    function makeSpecialDish()
    {
        echo "The Chef makes bbq ribs <br>";
    }
}

$chef = new Chef();
$chef->makeChicken();

class ItalianChef extends Chef
{
    function makePasta()
    {
        echo "Italian making pasta<br>";
    }

    function makeSpecialDish()
    {
        echo "Italian make specialDish as Chikcken Parm<br>";
    }

}

$italianChef = new ItalianChef();
$italianChef->makePasta();
$italianChef->makeSpecialDish();

?>


</body>

</html>

