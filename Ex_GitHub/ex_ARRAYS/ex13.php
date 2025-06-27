<?php

$nb = readline("Combien de montants souhaitez-vous entrer? ");

for ($i=1; $i<=$nb; $i++){
    $montants[] = readline("Montant $i : ");
}
$val_max = 0;
foreach ($montants as $i => $val){
    if ($val > $val_max){
        $val_max = $val;
        $idx = $i+1;
    }
}
print("le Montant le plus élevé est de $val_max à la position $idx.")

?>