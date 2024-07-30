<!-- loop pratices problem print the varible in reverse order -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>enter the number you want to downword</label>
    <input type="number" name="number">
    <br>
    <input type="submit" value="start">
  </form>
</body>

</html>
<?php
$number = $_POST["number"];
for ($i = $number; $i > 0; $i--) {
  echo "$i<br>";
}
?>