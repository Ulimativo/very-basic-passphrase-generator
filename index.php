<?php

function getPass($length) {

$phraseList="Auto,Bahn,Zug,Hafen,Schiff,Boot,Depot,Holz,Farbe,Schrift,Name,Kopf,Hand,Blume,Wald,Baum,
             Eisen,Kupfer,Metall,Rohr,Kind,Mutter,Vater,Torte,Geburtstag,Kerze";
$phrases=explode(",", $phraseList);
$alpha='abcdefghijklmnopqrstuvwxyz';
$alphaUpper=strtoupper($alpha);
$numeric='0123456789';
$special=".-+=_,!@$#*%<>[]{}";
$chars="";

$randPhrases=array_rand($phrases,$length);
$pw='';
$len=strlen($numeric);

foreach ($randPhrases as $phrase) {
  $pw.=$phrases[$phrase];
}
$pw.=substr($numeric, rand(0, $len-1), 1);
$pw.=substr($numeric, rand(0, $len-1), 1);

return $pw;
};

echo getPass(2);
 ?>
