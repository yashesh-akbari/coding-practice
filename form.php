<!-- login form using get and post method
$_GET,
$_POST - special variables used to collect data from an html form data is sent to the file in the action attribute of <form>
< form action="some_file.php" method="post">

$_GET=
Data is appended to the url
NOT SECURE
char limit
Bookmark is possible w/ values
GET requests can be cached
Better for a search page

$_POST=
Data is packaged inside the body of the http request
MORE SECURE
No data limit
Cannot bookmark
GET requests are not cached
Better for submitting credentials -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="username">username:</label>
    <input type="text" name="username">
    <br>
    <label for="password">password:</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="login">
  </form>
</body>

</html>
<?php
echo "{$_POST["username"]}<br>";
echo "{$_POST["password"]}<br>";
?>