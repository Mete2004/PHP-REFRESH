<?php

function netEuro($getal) {

   $resultaat_van_Number_format = number_format((float)$getal, 2, '.', ',');

  return "€ ".$resultaat_van_Number_format;

}




echo netEuro(12);

echo "<br>";

echo netEuro(12.5);

echo "<br>";

echo netEuro(12.6666);

echo "<br>";

?>

