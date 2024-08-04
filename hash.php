<?php
// hashing = transforming sensitive data (password) into letters,numbers,and/or symblos via a mathematical process.(similar to encre hides the original data from 3rd partices.)

$password = "pizza123";

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("pizza123", $hash)) {
  echo "You are logged in!";
} else {
  echo "Incorrect Password!";
}
