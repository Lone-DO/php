<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
    PHP Tutorial: Checkboxes
  </title>
</head>

<body>
  <form method="POST" action="checkboxes.php">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    Lemons: <input type="checkbox" name="fruits[]" value="lemons"><br>
    <input type="submit">
  </form>
  <?php
  $fruits = $_POST["fruits"];
  echo $fruits[0];
  ?>
</body>

</html>