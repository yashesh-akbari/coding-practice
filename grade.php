<!-- switch case pratice proble using grade example -->

<?php
$grade = "A";
switch ($grade) {
  case "A":
    echo ("you got grate mark");
    break;
  case "B":
    echo ("you got good mark");
    break;
  case "C":
    echo ("you got average mark");
    break;
  case "D":
    echo ("you have low average marks");
    break;
  case "E":
    echo ("you just passes");
    break;
  case "F":
    echo ("you got falied");
    break;
  default:
    echo ("{$grade} is not vaild grade");
}
