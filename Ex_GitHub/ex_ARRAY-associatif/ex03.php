<?php

$pays_ville = [
    "Japon" => "Tokyo",
    "Canada" => "Ottawa",
    "Italie" => "Rome",
];
foreach ($pays_ville as $pays => $ville){
    // comparaison de la 1ere lettre de la clé $pays
    if (in_array($pays[0], ['A', 'E', 'I', 'O', 'U', 'Y'])){
    print("La capitale d' $pays est $ville\n");
    }
    else {
    print("La capitale du $pays est $ville\n");
    }
}

?>