<!-- gobal scope pratice problem-->

<!DOCTYPE html>
<html>

<body>

  <?php
  $name = 'Linus';
  function myTest()
  {
    $name = 'Tobias';
  }
  echo "after $name <br>";
  myTest();
  echo "before $name <br>";
  ?>

</body>

</html>