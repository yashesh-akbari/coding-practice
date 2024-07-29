<?php

//array ="variable" which can hold more than one value at ()
//array basic funtion

$foods = array("a", "b", "c", "d");

echo $foods[0] . "<br>"; // outputs "a"

array_push($foods, "l", "e", "w");
#output a b c d l e w

array_pop($foods);
#output a b c d l e

array_shift($foods);
#output b c d l e

echo count($foods) . "<br>";
#5

foreach ($foods as $food) {
  echo $food . "\n";
}
