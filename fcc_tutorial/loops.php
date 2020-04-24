<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
    PHP Tutorial Website
  </title>
</head>

<body>
  <form method="POST" action="loops.php">

    <input type="submit" value="Sum" style="width: 50%; margin:1rem;">
  </form>
  <hr>


  <!-- While Loops -->
  <?php
  $index = 1;
  do {
    echo "While Loop: $index <br>";
    ++$index;
  } while ($index <= 10)
  ?>
  <!-- End of While Loops -->

  <!-- For Loops -->
  <?php
  $arr = array(2, 4, 8, 16, 32, 64, 128);

  for ($i = 0; $i < count($arr); ++$i) {
    echo "For Loop: $arr[$i] <br>";
  }

  ?>

</body>

</html>