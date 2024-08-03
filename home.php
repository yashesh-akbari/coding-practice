<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header><input type="submit" name="logout" value="logout"></input></header>
  <form action="home.php" method="post">
    <h1>this is home page</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque aliquid, eos exercitationem deserunt fuga optio quo autem suscipit beatae praesentium ea maiores officia. Fugiat, consectetur? Itaque minima modi, esse at repellat voluptate, reiciendis sequi deserunt aspernatur adipisci corrupti impedit numquam in assumenda eaque eveniet delectus debitis distinctio quibusdam provident. Repellat.</p>
  </form>
</body>

</html>
<?php
if (isset($_POST["logout"]));
header("Location: index.php");
session_destroy();
?>