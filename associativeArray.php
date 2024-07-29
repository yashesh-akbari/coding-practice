<!-- associative array = An array made of key => value pairs -->

<!-- understand the associative array using example of capital city of coutry -->
<?php
$capitals = array(
  "india" => "New Delhi",
  "japan" => "kyoto", "usa" => "washington D.C",
);

//echo $capitals["india"]; 
//output:New Delhi
$capitals["china"] = "Beijing";
/* output:
india = New Delhi
japan = kyoto
usa = washington D.C
china = Beijing */

array_pop($capitals);
/* output:
india = New Delhi
japan = kyoto
usa = washington D.C*/

array_shift($capitals);
/* output:
japan = kyoto
usa = washington D.C*/

foreach ($capitals as $key => $value) {
  echo "{$key} = \n  {$value}<br>";
}


$keys = array_keys($capitals);
/* japan = kyoto
usa = washington D.C
japan
usa */

$keys = array_values($capitals);
/* japan = kyoto
usa = washington D.C
kyoto
washington D.C */
foreach ($keys as $key) {
  echo "{$key} <br>";
}

?>