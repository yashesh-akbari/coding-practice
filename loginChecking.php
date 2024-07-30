<!-- login form checking using isset and empty variable -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login form check</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>username:</label>
    <input type="text" name="username">
    <br>
    <label>password:</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="log in ">
  </form>
</body>

</html>
<?php
foreach ($_POST as $key => $value) {
  echo "{$key}={$value}<br>";
}
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if (empty($username)) {
    echo "username is missing";
  } elseif (empty($password)) {
    echo "password is missing";
  } else {
    echo "Hello {$username}";
  }
}
?>