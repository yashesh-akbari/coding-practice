<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <input type="checkbox" name="Pizza" value="Pizza">Pizza<br>
    <input type="checkbox" name="burger" value="burger">burger<br>
    <input type="checkbox" name="Hotdog" value="Hotdog">Hotdog<br>
    <input type="checkbox" name="Taco" value="Taco">Taco<br>
    <input type="checkbox" name="PaniPuri" value="PaniPuri">Pani puri<br>
    <input type="submit" name="submit" value="submit">
  </form>
</body>

</html>
<?php
if (isset($_POST["submit"])); {
  if (isset($_POST["Pizza"])) {
    echo "you like Pizza<br>";
  }
  if (isset($_POST["burger"])) {
    echo "you like burger<br>";
  }
  if (isset($_POST["Hotdog"])) {
    echo "you like Hotdog<br>";
  }
  if (isset($_POST["Taco"])) {
    echo "you like Taco<br>";
  }
  if (isset($_POST["PaniPuri"])) {
    echo "you like Pani Puri<br>";
  }
  if (empty($_POST["Pizza"])) {
    echo "you don't like Pizza<br>";
  }
  if (empty($_POST["burger"])) {
    echo "you don't like burger<br>";
  }
  if (empty($_POST["Hotdog"])) {
    echo "you don't like Hotdog<br>";
  }
  if (empty($_POST["Taco"])) {
    echo "you don't like Taco<br>";
  }
  if (empty($_POST["PaniPuri"])) {
    echo "you don't like Pani Puri<br>";
  } else {
    echo "you are not like any above given food<br>";
  }
}
?>