
<?php

function getPass($wordCount, $maxLength, $minLength) {

$phraseList="Auto,Bahn,Zug,Hafen,Schiff,Boot,Depot,Holz,Farbe,Schrift,Name,Kopf,Hand,Blume,Wald,Baum,
             Eisen,Kupfer,Metall,Rohr,Kind,Mutter,Vater,Torte,Geburtstag,Kerze,Hyper,Mega,Kommando,Tatze,Katze,Ratte";
$phrases=explode(",", $phraseList);
$numeric='0123456789';
$pw='';
$len=strlen($numeric);
$i=0;

while($i<$wordCount) {
  $phrase=array_rand($phrases, 1);
  if (strlen($phrases[$phrase])<=$maxLength-2) {
    $pw.=$phrases[$phrase];
    $i++;
  } // end if
} // end while

$pw.=substr($numeric, rand(0, $len-1), 1);
$pw.=substr($numeric, rand(0, $len-1), 1);

return $pw;
};

#echo getPass(2,8,4); // Example: get a Password of 2 Phrases, with a max passwort length of 8, and a minimum length of 4.
 ?>
