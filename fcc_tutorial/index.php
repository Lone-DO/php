<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
    PHP Tutorial Website
  </title>
</head>

<body>
  <?php
  // $string = "To be or not to be";
  // $integer = 30;
  // $float = 3.14;
  // $truthy = true;
  // $falsey = false;
  // $null = null;

  $phrase = "Giraffe Academy";

  echo strtolower($phrase);
  echo "<hr>";
  echo strtoupper("dog says 'bark'");
  echo "<hr>";
  echo strlen("hello world");
  echo "<hr>";
  echo $phrase[0];
  echo "<hr>";
  echo str_replace("Giraffe", "Neko", $phrase);
  echo "<hr>";
  echo substr($phrase, 8, 3);

  echo "<hr>";
  echo "<p>This is a PHP Site</p>";
  ?>
  <!-- <h1>Hello World!</h1> -->
</body>

</html>