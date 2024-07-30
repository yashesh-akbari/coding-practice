<!-- local scope pratice problem -->

<!DOCTYPE html>
<html>

<body>

  <?php
  //
  function lo()
  {
    $hi = 4;
    echo "inner {$hi}<br>";
  }
  echo "outer {$hi}<br>";
  lo();
  ?>
</body>

</html>