<!-- //isset pratices problem of credit card select -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>isset pratices of credit card select</title>
</head>

<body>
  <form action="index.php" method="post">
    <input type="radio" name="credit_card" value="visa1">visa1<br>
    <input type="radio" name="credit_card" value="visa2">visa2<br>
    <input type="radio" name="credit_card" value="visa3">visa3<br>
    <input type="submit" value="confirm">
  </form>
</body>

</html>
<?php
if (isset($_POST["confirm"]))
  $credit_card = null; {
  if (isset($_POST["credit_card"])) {
    $credit_card = $_POST["credit_card"];
    echo "you selected {$credit_card}";
  } else {
    echo "please select any one visa card";
  }
}
?>