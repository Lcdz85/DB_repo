<?php

// $n = readline( "Combien de nombre souhaitez vous multiplier? ");
// $x = 1;  #accumulateur (ne peut être zéro pour une multiplication car N*0=0)

// for ($i=1; $i <= $n; $i++){
//     $val= readline("Tapez valeur ".$i." : ");
//     $x = $x * $val;
// }
// print("Résultat: ".$x);

$n = readline( "Combien de nombre souhaitez vous multiplier? ");
$i = 0;
$x = 1;
while ($i < $n){
    $i++;
    $val= readline("Tapez valeur ".$i." : ");
    $x = $x*$val;
}
print("Résultat: ".$x);