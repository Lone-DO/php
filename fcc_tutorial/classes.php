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