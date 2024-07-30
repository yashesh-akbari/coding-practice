<!-- from pratices problem "order of pizza" -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oder of pizza</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>quantity:</label>
    <input type="number" name="quantity">
    <br>
    <input type="submit" value="total">
  </form>
</body>

</html>
<?php
$food = "pizza";
$quantity = $_POST["quantity"];
$prize = 5;
$total = $prize * $quantity;
echo "you have odered {$quantity} x {$food}/s<br>";
echo "your total is:\${$total}<br>";
?>