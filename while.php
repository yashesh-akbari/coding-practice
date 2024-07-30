<!-- isset using to stop the infinite while loop -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <input type="submit" value="stop" name="stop">

  </form>
</body>

</html>
<?php
$seconds = 0;
$running = true;

while ($running) {
  if (isset($_POST["stop"])) {
    $running = false;
  } else {
    $seconds++;
    echo "$seconds<br>";
  }
}

?>