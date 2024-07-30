<!-- if else statement using example of workhours payout script -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>workhours script</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>Enter your working houres</label>
    <input type="number" name="hours">
    <br>
    <input type="submit" value="Earn Money">
  </form>
</body>

</html>
<?php
$hours = $_POST["hours"];
$payout_par_hours = 20;
if ($hours <= 0) {
  $totalearn = 0;
} elseif ($hours >= 1 && $hours <= 40) {
  $totalearn = $payout_par_hours * $hours;
} else {
  $totalearn = ($payout_par_hours * 40) - (($hours - 40) * 1.5 * 40);
}
echo "earn money this week \${$totalearn}";
?>