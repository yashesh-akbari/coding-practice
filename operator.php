<?php
// arithmatice operators
// + - * / ** %

// increment/decrement operatores
// ++ --

// operatores procedence
// ()
// **
// * / %
// + -

$x = 10;
$y = 2;
$z = null;
$z = $x + $y;
echo "the result of add is {$z}<br>";
$z = $x - $y;
echo "the result of sub is {$z}<br>";
$z = $x / $y;
echo "the result of div is {$z}<br>";
$z = $x * $y;
echo "the result of muti is {$z}<br>";
$z = $x ** $y;
echo "the result of power is {$z}<br>";
$z = $x % $y;
echo "the result of pr is    {$z}<br>";

$count = 1;
$count++;
echo "the result of ++ is    {$count}<br>";
$count--;
echo "the result of -- is    {$count}<br>";
$count += 2;
echo "the result of +=2 is   {$count}<br>";
