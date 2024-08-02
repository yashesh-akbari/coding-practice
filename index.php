<?php

// session = 5GB used to store information on a user to be used across mutiple pages.
// A user is assigned a session-id ex. login credentials
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- login form example understand the session method -->
  <title>Login Form</title>
</head>

<body>
  <form action="index.php" method="post">
    username: <input type="text" name="username">
    password: <input type="password" name="password">
    <input type="submit" value="login">
  </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {
  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];


    echo "login successful!!!";
    echo $_SESSION["username"];
    echo $_SESSION["password"];

    header("Location: home.php");
  } else {
    echo "username or password are missing!!!";
  }
} else {
  echo "username or password are missing!!!";
}
?>