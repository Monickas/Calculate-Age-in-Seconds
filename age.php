<?php
include "index.php";

function ageinsecond(){
  $age=$_GET["age"];
  $ageinsecond=$age*31556925.9936;
  echo "Twój wiek to: $ageinsecond sekund" ;
}
?>
