<form method="POST" action="object.php">
  <select name="students">
    <option value="Jim">Jim</option>
    <option value="Pam">Pam</option>
    <option value="Jerry">Jerry</option>
  </select>
  <input type="submit">
</form>
<hr>
<?php
$grades = array("Jim" => "A+", "Pam" => "B-", "Jerry" => "C+");
echo $grades[$_POST["students"]];
?>