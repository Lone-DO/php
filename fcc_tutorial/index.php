<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
    PHP Tutorial Website
  </title>
</head>

<body>
  <form action="index.php" method="get">
    <label for="num1">First Number</label>
    <input type="number" name="num1"><br>
    <label for="num2">Second Number</label>
    <input type="number" name="num2"><br>

    <input type="submit">
  </form>
  <br>
  Answer is: <?php echo $_GET["num1"] + $_GET["num2"] ?>

  <!-- <h1>Hello World!</h1> -->
</body>

</html>