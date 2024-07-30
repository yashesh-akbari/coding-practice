<?php
//logical operators and or pratices using weather example
$temp = 15;
$cloudy = true;
if ($temp <= 0 || $temp > 30) {
  echo "wether are not good<br>";
} else {
  echo "wether are good<br>";
}

if ($cloudy == true && [$temp > 0 || $temp < 30]) {
  echo "wether are cloudy also<br>";
} else {
  echo "wether are not cloudy also<br>";
}
