<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
    PHP Tutorial: functions
  </title>
</head>

<body>
  <form method="POST" action="function.php">

    <input type="submit">
  </form>
  <hr>

  <?php
  function greet($user, $age)
  {
    echo "Hello $user, you were last online $age months ago.";
  }

  function cubed($num)
  {
    return $num * $num * $num;
  }

  $result = cubed(4);
  ?>


  <h3><?php greet("Lone", 10); ?><h3>
      <i>Cubed: <?php echo $result; ?></i>
</body>

</html>