<!-- using basic math funtion find the area,volume,circumference of circle -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>circle property</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>radius of circle:</label>
    <input type="text" name="radius">
    <br>
    <input type="submit" value="calculate">
  </form>
</body>

</html>
<?php
$radius = $_POST["radius"];

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);
echo "circumference of circle={$circumference}cm<br>";

$area = pi() * pow($radius, 2);
$area = round($area, 2);
echo "area of circle={$area}cm<br>";

$volume = (4 * pi() * pow($radius, 3)) / 3;
$volume = round($volume, 2);
echo "volume of circle={$volume}cm<br>";
?>