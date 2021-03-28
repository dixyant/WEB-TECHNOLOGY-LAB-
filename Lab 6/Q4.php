<?php
$arr = array("DSLR", "SLR");
var_dump($arr);
echo sizeof($arr);
echo "<br>";

array_push($arr, "Canon", "Nikon", "Sony", "Fuji", "Panasonic");
var_dump($arr);
echo sizeof($arr);
echo "<br>";

array_pop($arr);
var_dump($arr);
echo sizeof($arr);
echo "<br>";

var_dump($arr);
?>