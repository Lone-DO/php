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
    <label for="name">Name:</label>
    <input type="text" name="name"><br>
    <label for="age">Age:</label>
    <input type="text" name="age"> <br>
    <input type="submit">
  </form>
  <br>
  <p>Your name is <?php echo $_GET["name"]; ?></p>
  <p>You are <?php echo $_GET["age"]; ?> Years old</p>

  <!-- <h1>Hello World!</h1> -->
</body>

</html>