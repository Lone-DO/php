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

  $modular = 12 % 3;
  $absolute  = abs(-111);
  $power = pow(2, 4);
  $squareroot = sqrt(144);
  $max = max(2, 10, 50);
  $min =  min(11, 21, 41);
  $round = round(3.2);
  $ceil = ceil(3.1);
  $floor = floor(3.9);

  echo  $modular;
  echo "<hr>";
  echo  $absolute;
  echo "<hr>";
  echo  $power;
  echo "<hr>";
  echo $squareroot;
  echo "<hr>";
  echo $max;
  echo "<hr>";
  echo  $min;
  echo "<hr>";
  echo  $round;
  echo "<hr>";
  echo $ceil;
  echo "<hr>";
  echo $floor;

  echo "<hr>";
  echo "<p>This is a PHP Site $round</p>";
  ?>
  <!-- <h1>Hello World!</h1> -->
</body>

</html>