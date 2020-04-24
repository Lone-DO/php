<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
    PHP Tutorial Website
  </title>
</head>

<body>
  <form method="POST" action="index.php">
    First Num:<input type="number" step="0.00001" name="num1"><br>
    Operator: <input type="text" name="op" maxlength="1"><br>
    Second Num: <input type="number" step="0.00001" name="num2"><br>
    <input type="submit" value="Sum" style="width: 50%; margin:1rem;">
  </form>
  <hr>

  <?php
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $op = $_POST["op"];
  $result;
  $isInvalid = false;

  switch ($op) {
    case "+":
      $result = $num1 + $num2;
      break;
    case "-":
      $result = $num1 - $num2;
      break;
    case "/":
      $result = $num1 / $num2;
      break;
    case "*":
      $result = $num1 * $num2;
      break;
    default:
      $result = "Invalid Operator";
      $isInvalid = true;
  }
  ?>

  <h3><?php
      if (strlen($op) > 0 && !$isInvalid) {
        echo $num1;
        echo " ";
        echo $op;
        echo " ";
        echo $num2;
        echo " = ";
        echo $result;
      } else {
        echo $result;
      }
      ?><h3>
</body>

</html>