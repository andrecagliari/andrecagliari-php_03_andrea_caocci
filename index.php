<?php

$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
  [
    'oscura',
    'era',
    89,
    [
      'mezzo',
      'E'
    ],
    'ritrovai',
    'per'
  ],
  'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
  'fine' => '!'
];

// Variabili extra per parole non presenti nei due array
$cammin = "cammin";
$nostra = "nostra";
$vita = "vita";
$una = "una";
$selva = "selva";
$che = "che'";
$la = "la";
$smarrita = "smarrita";

// Componiamo la frase
$results = "Nel " 
  . $words1[6][3][0] . " "          // mezzo
  . "di " 
  . $cammin . " " 
  . "di " 
  . $nostra . " " 
  . $vita . " " 
  . $words1[4] . " "                // mi
  . $words1[6][4] . " "             // ritrovai
  . $words1[6][5] . " "             // per
  . $una . " " 
  . $selva . " " 
  . $words1[6][0] . ", "            // oscura
  . $che . " " 
  . $la . " " 
  . $words1[7] . " "                // diritta
  . "via " 
  . $words1[6][1] . " "             // era
  . $smarrita . ".";

echo $results;

?>
