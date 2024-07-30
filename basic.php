<?php
//isset() = return true value if a variable and not null 
//empty() = returns true if a variable is not declared

$username = "bro";

if (isset($username)) {
  echo "this variable is set";
} else {
  echo "this variable is not set";
}

if (empty($username)) {
  echo "this variable is empty";
} else {
  echo "this variable is not empty";
}
