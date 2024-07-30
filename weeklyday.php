<!-- switch case pratice proble using weeklyday example -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>weeklydays</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>Enter your weeklydays:</label>
    <input type="text" name="day">
    <br>
    <input type="submit" value="print the day">
  </form>
</body>

</html>
<?php
$weeklydays = $_POST["day"];
switch ($weeklydays) {
  case $weeklydays == 1:
    echo "your day is {$weeklydays}";
    break;
  case $weeklydays == 2:
    echo "your day is {$weeklydays}";
    break;
  case $weeklydays == 3:
    echo "your day is {$weeklydays}";
    break;
  case $weeklydays == 4:
    echo "your day is {$weeklydays}";
    break;
  case $weeklydays == 5:
    echo "your day is {$weeklydays}";
    break;
  case $weeklydays == 6:
    echo "your day is {$weeklydays}";
    break;
  case $weeklydays == 7:
    echo "your day is {$weeklydays}";
    break;
  default:
    echo "enter the vaild weeklydays";
    break;
}
