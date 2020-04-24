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
    echo "Hello, My name is $this->name, I'm a $this->age year old $this->gender, and graduated with a $this->gpa GPA!";
  }
}

$person1 = new Person("John Wayne", 54, 3.5, "Male");
$person1->greet();