<?php

$arr = [8, 10, 20];

// for($i=0; $i<3; $i++){
//     print("\nChiffre: ".$arr[$i]);
// }

// for($i=0; $i<count($arr); $i++){
//     print("\nChiffre: ".$arr[$i]);
// }

foreach($arr as $key => $value){
    print("\nChiffre: ".$value." se trouve à la position ".$key);
}
foreach($arr as $a => $b){
    print("\nChiffre: ".$b." se trouve à la position ".$a);
}

foreach($arr as $toto){         # qd il n'y a qu'1 variable, c'est d'office les valeurs qui sont retournées
    print("\nChiffre: ".$toto);
}