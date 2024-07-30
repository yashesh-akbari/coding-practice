<!-- loop pratices problem print the varible in order -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>up count</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>enter number you want to count</label>
    <input type="text" name="countw">
    <br>
    <input type="submit" value="start">
  </form>
</body>

</html>
<?php
$countw = $_POST["countw"];
for ($i = 0; $i <= $countw; $i++) {
  echo $i . "<br>";
}
?>