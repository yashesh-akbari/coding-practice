<?php
// cookie = information about a user stored in a user's web-brower targeted advertisements,browsing preferences,and other non-sensitive data
setcookie("food", "vadapav", time() + (86400 * 2), "/");
setcookie("drink", "cola", time() + (86400 * 3), "/");

if (isset($_COOKIE["food"])) {
  echo "Buy a {$_COOKIE["food"]}";
} else {
  echo "Buy some Food";
}
