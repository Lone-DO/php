<?php
class Book
{
  var $title;
  var $author;
  var $pages;
  var $release;
}

$book1 = new Book;
$book1->title = "Witcher";
$book1->author = "Funhaus";
$book1->pages = 500;
$book1->release = "05/01/2001";

$book2 = new Book;
$book2->title = "Lord of the Rings";
$book2->author = "JK Rowling";
$book2->pages = 400;