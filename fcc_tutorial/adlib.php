<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
    PHP Tutorial: Adlibs
  </title>
</head>

<body>
  <h1>Mad Libs</h1>
  <h2>VACATIONS</h2>

  <form action="adlib.php" method="get">

    <fieldset>
      <legend>Please fill in the blanks below!</legend>
      <label for="adj1">Adjective #1: </label>
      <input type="text" name="adj1"><br>
      <label for="adj2">Adjevtive #2:</label>
      <input type="text" name="adj2"><br>
      <label for="noun1">Noun #1:</label>
      <input type="text" name="noun1"><br>
      <label for="noun2">Noun #2:</label>
      <input type="text" name="noun2"><br>
      <label for="plural_noun1">Plural Noun #1:</label>
      <input type="text" name="plural_noun1"><br>
      <label for="game1">Game:</label>
      <input type="text" name="game1"><br>
      <label for="plural_noun2">Plural Noun #2:</label>
      <input type="text" name="plural_noun2"><br>
      <label for="verb1">Verb ending with "ING" #1:</label>
      <input type="text" name="verb1"><br>
      <label for="verb2">Verb ending with "ING" #2:</label>
      <input type="text" name="verb2"><br>
      <label for="plural_noun3">Plural Noun #3:</label>
      <input type="text" name="plural_noun3"><br>
      <label for="verb3">Verb ending with "ING" #3:</label>
      <input type="text" name="verb3"><br>
      <label for="noun3">Noun #3:</label>
      <input type="text" name="noun3"><br>
      <label for="plant1">Plant:</label>
      <input type="text" name="plant1"><br>
      <label for="body_part1">Part of the body:</label>
      <input type="text" name="body_part1"><br>
      <label for="place1">A Place:</label>
      <input type="text" name="place1"><br>
      <label for="verb4">Verb ending with "ING" #4:</label>
      <input type="text" name="verb4"><br>
      <label for="adj3">Adjective #3:</label>
      <input type="text" name="adj3"><br>
      <label for="num1">Number:</label>
      <input type="number" name="num1"><br>
      <label for="plural_noun4">Plural Noun #4:</label>
      <input type="text" name="plural_noun4"><br>
    </fieldset>
    <input type="submit">
  </form>
  <hr>
  <i>Adlibs are in <strong>BOLD</strong></i>
  <p>
    A vacation is when you take a trip to some <strong><?php echo $_GET["adj1"] ?></strong> place
    with your <strong><?php echo $_GET["adj2"] ?></strong> family. Usually you go to some place
    that is near a/an <strong><?php echo $_GET["noun1"] ?></strong> or up on a/an
    <strong><?php echo $_GET["noun2"] ?></strong>.
    A good vacation place is one where you can ride <strong><?php echo $_GET["plural_noun1"] ?></strong>
    or play <strong><?php echo $_GET["game"] ?></strong> or go hunting for
    <strong><?php echo $_GET["plural_noun2"] ?></strong>. I like
    to spend my time <strong><?php echo $_GET["verb1"] ?></strong> or <strong><?php echo $_GET["verb2"] ?></strong>.
    When parents go on a vacation, they spend their time eating
    three <strong><?php echo $_GET["plural_noun3"] ?></strong> a day, and fathers play golf, and mothers
    sit around <strong><?php echo $_GET["verb3"] ?></strong>. Last summer, my little brother
    fell in a/an <strong><?php echo $_GET["noun3"] ?></strong> and got poison
    <strong><?php echo $_GET["plant1"] ?></strong> all
    over his <strong><?php echo $_GET["body_part1"] ?></strong>. My family is going to go to (the)
    <strong><?php echo $_GET["place1"] ?></strong>, and I will practice <strong><?php echo $_GET["verb4"] ?></strong>.
    Parents
    need vacations more than kids because parents are always very
    <strong><?php echo $_GET["adj3"] ?></strong> and because they have to work
    <strong><?php echo $_GET["num1"] ?></strong>
    hours every day all year making enough <strong><?php echo $_GET["plural_noun4"] ?></strong> to pay
    for the vacation.
  </p>
  <hr>
  <a href="http://www.madlibs.com/content/uploads/2016/04/VacationFun_ML_2009_pg15.pdf">This Adlib's Reference</a>
</body>

</html>