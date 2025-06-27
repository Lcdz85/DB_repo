<?php

$nb = readline("Combien de montants souhaitez-vous entrer? ");

for ($i=1; $i<=$nb; $i++){
    $montants[] = readline("Montant $i : ");
}
print(max($montants));
print("\n");

foreach ($montants as $cle => $val){
    $montants[$cle] = $val * 1.21;
}
print_r($montants);
?>