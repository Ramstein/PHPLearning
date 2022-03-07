<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Learning</title>
</head>

<body>


<?php

class Book
{
    var $title;
    var $author;
    var $pages;

    function __construct($Title, $Author, $Pages)
    {
        $this->title = $Title;
        $this->author = $Author;
        $this->pages = $Pages;
    }
}

class Student
{
    var $name;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa)
    {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    function hasHonors()
    {
        if ($this->gpa >= 3.5) {
            return "true";
        }
        return "false";
    }
}


$book1 = new Book("Ramstein", "Jk Rowling", 400);
$book1->title = "Hunger Games<br>";
//$book1->author = "Jk Rowling<br>";
//$book1->pages = 400;


//echo $book1->title;
//echo $book1->author;
//echo $book1->pages;

$book2 = new Book("Mike", "Tolkin", 700);
//$book2->title = "Lord of the rings<br>";
//$book2->author = "Tolkin<br>";
//$book2->pages = 700;

//echo $book2->title;
//echo $book2->author;
//echo $book2->pages;

$student1 = new Student("jim", "Business", 2.8);
$student2 = new Student('Pam', 'Art', 3.6);


echo $student2->hasHonors();

?>


</body>

</html>

