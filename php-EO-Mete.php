<?php


$opmerking = "Deze student is erg goed in programmeren in PHP";
$aantal = 2;



function breekAf($aantal,$opmerking){

$gesplitsteWoorden = explode(' ', $opmerking); 
$karaktersTellen = 0;
$behoudenWoorden = [];

 foreach($gesplitsteWoorden as $opmerking){
        $karaktersTellen = $karaktersTellen + strlen($opmerking);

        if($karaktersTellen <= $aantal){

            $behoudenWoorden[] = $opmerking;

        }

        $karaktersTellen++; //Telt de spaties bij
 }

return implode(' ', $behoudenWoorden);
}



echo breekAf(32, "Deze student is erg goed in programmeren in PHP"). "<br>";
echo breekAf(18, "Deze student is erg goed in programmeren in PHP")."<br>";
echo breekAf(19, "Deze student is erg goed in programmeren in PHP")."<br>";
echo breekAf(20, "Deze student is erg goed in programmeren in PHP")."<br>";
echo breekAf(21, "Deze student is erg goed in programmeren in PHP")."<br>";
echo breekAf(24, "Deze student is erg goed in programmeren in PHP")."<br>";
echo breekAf(3, "Deze student is erg goed in programmeren in PHP")."<br>";

?>