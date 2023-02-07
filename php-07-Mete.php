
<?php



 function begroeting($naam)
 
 {
 
     if (date("H:i") <= '11:59') {
 
         return ("goedenmorgen");
 
     } else if (date("H:i") <= '18:00') {
 
         return ('goedemiddag');
 
     } else {
 
        return('goedenavond');
 
     }
 
 }
 
 


echo begroeting("") . " Vasco";
 
 echo "<br>";
 
 echo begroeting("") . " Jesse";
 
 echo "<br>";
 
 echo begroeting("") . " Nadir";
 
 
 
 ?>
