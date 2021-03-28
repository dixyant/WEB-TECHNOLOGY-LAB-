<?php

$persons = array(
  "Dikshyant"=>array(
    "Name" => "Dikshyant",
    "Age"      => "20"
  ),
 "Hari"=>array(
    "Name" => "Hari",
    "Age"      => "50"  
 ),
 

);

echo "<br>";

foreach($persons as $person => $details){
  echo $person . ": " . "<br>";
    foreach($details as $title => $detail){
      echo $title . ": " . $detail . ", ";
        echo "<br>";
    }
  echo "<br>";
}

?>