<?php

$array = [11,11,5,2,12,6,7,8,1,10,9];

function telGroteGetallen($thisArray) {

 $Totaal = 0;
  for($i=0; $i<count($thisArray);$i++){  
    if ( $thisArray[$i] > 10 ){  
      $Totaal += $thisArray[$i] ;
   }
  }
  return($Totaal);
}

    echo telGroteGetallen ([12,20,20])."<br>";
    echo telGroteGetallen ($array)."<br>";	 
    echo telGroteGetallen ([5, 10, 11]);

    
?>

