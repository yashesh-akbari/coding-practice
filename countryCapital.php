<!-- finding the country capital using associative array -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>Enter the country name to find the capital city</label>
    <input type="text" name="country" placeholder="Enter country name">
    <br>
    <button type="submit">Search</button>
  </form>
</body>

</html>
<?php
$countrys = array("india" => "New delhi", "usa" => "washinton DC", "japan" => "tokyo");
echo $countrys["india"];
?>