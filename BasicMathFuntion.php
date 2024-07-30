<!-- basic arithmatice and math funtion pratice -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>math function</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="x">x</label>
    <input type="text" name="x">
    <br>
    <label for="x">y</label>
    <input type="text" name="y">
    <br>
    <label for="x">z</label>
    <input type="text" name="z">
    <br>
    <input type="submit" value="total">
  </form>
</body>

</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
echo "x is $x <br>";
echo "y is $y <br>";
echo "z is $z <br>";
$total = null;
echo "{$total}<br>";
$total = abs($x);
echo "absaltu value{$total}<br>";
$total = round($x);
echo "round the number {$total}<br>";
$total = ceil($x);
echo "ceil the number {$total}<br>";
$total = floor($x);
echo "floor the number{$total}<br>";
$total = pow($x, $y);
echo "pow of {$total}<br>";
$total = sqrt($x);
echo "square root {$total}<br>";
$total = max($x, $y, $z);
echo "maxmium of three number {$total}<br>";
$total = min($x, $y, $z);
echo "minimium of three number {$total}<br>";
$total = pi();
echo "pi value {$total}<br>";
$total = rand();
echo "random number genrate {$total}<br>";
?>