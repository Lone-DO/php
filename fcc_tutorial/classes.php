<?php
class Book
{
  var $title;
  var $author;
  var $pages;
  var $release;

  function __construct($Title, $Author, $Pages)
  {
    $this->title = $Title;
    $this->author = $Author;
    $this->pages = $Pages;
    echo "New Book Created: $Title<br>";
  }
}

$book1 = new Book("Witcher", "Funhaus", 500);
$book2 = new Book("Lord of the Rings", "JK Rowling", 400);

class Person
{
  var $name;
  var $age;
  var $gpa;
  var $gender;

  function __construct($name, $age, $gpa, $gender)
  {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
    $this->gpa = $gpa;
  }
  function greet()
  {
    echo "Hello, My name is $this->name, I'm a $this->age year old $this->gender, and graduated with a $this->gpa GPA!<br>";
  }
}

$person1 = new Person("John Wayne", 54, 3.5, "Male");
$person1->greet();

class Movie // Visibility Modifiers
{
  // public = var, private
  public $title;
  private $rating;

  function __construct($title, $rating)
  {
    $this->title = $title;
    $this->setRating($rating);

    echo "New Movie Created: $title, $rating<br>";
  }
  function getRating()
  {
    return $this->rating;
  }
  function setRating($newRating)
  {
    $newRating = strtoupper($newRating);

    switch ($newRating) {
      case "G":
      case "PG":
      case "PG-13":
      case "R":
      case "NR":
      case "A":
        $this->rating = $newRating;
        break;
      default:
        $this->rating = "NR";
    }
  }
}

$avatar = new Movie("Avatar: The Last Airbender", "PG-13");
$avatar->setRating("A");
echo $avatar->getRating();
echo "<hr>";

class Chef
{
  function makePasta()
  {
    echo "The chef makes pasta";
  }

  function makePizza()
  {
    echo "The chef makes a suprmeme pizza";
  }

  function makeStirFry()
  {
    echo "The chef makes Shitake Stir Fry";
  }
}

class MasterChef extends Chef
{
  function makeSalad()
  {
    echo "The chef makes a hearty Salad";
  }
  function makeGuac()
  {
    echo "The chef stirs up a spicy Guacamole";
  }
}

$master = new MasterChef();
$master->makeGuac();