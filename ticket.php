<?php
//logical or operator pratices using example of ticket price
$child = true;
$old = false;
$ticket = null;

if ($child == true || $old == true) {
  $ticket = 10;
} else {
  $ticket = 20;
}

echo "The ticket price for you \${$ticket}";
