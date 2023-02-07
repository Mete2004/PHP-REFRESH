
<?php



function kleineWoorden($string) {
//$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";
$count=0;
    $arWords = preg_split("/[^\w]*([\s]+[^\w]*|$)/", $string, -1, PREG_SPLIT_NO_EMPTY);
    foreach($arWords as $word){
        if(strlen($word)<4)
        $count +=1;
    }
echo $count;


}

echo kleineWoorden("Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.")."<br>";
echo kleineWoorden("hallo ik ben")."<br>";
echo kleineWoorden("a b c d e")."<br>";
    ?>
