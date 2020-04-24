  <hr>

  <?php
  $isMale = false;
  $isTall = true;

  if ($isMale && $isTall) {
    echo "You are a Tall Male";
  } elseif ($isMale && !$isTall) {
    echo "You are a short Male";
  } elseif (!$isMale && $isTall) {
    echo "You are a Tall Female";
  } else {
    echo "You are a Female";
  }
  ?>
  <hr>
  <?php
  function getMax($num1, $num2, $num3)
  {
    if ($num1 >= $num2 && $num1 >= $num3) {
      return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
      return $num2;
    } else {
      return $num3;
    }
  }

  echo getMax(122, 20, 2000);
  ?>

  <hr>