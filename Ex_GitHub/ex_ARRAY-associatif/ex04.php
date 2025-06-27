<?php

$pays_ville = [
    "Japon" => "Tokyo",
    "Canada" => "Ottawa",
    "Italie" => "Rome",
];
$pays_ville["Belgique"] = "Bruxelles";
$pays_ville["Brésil"] = "Brasilia";

foreach ($pays_ville as $pays => $ville){
    // comparaison de la 1ere lettre de la clé $pays
    if (in_array($pays[0], ['A', 'E', 'I', 'O', 'U', 'Y'])){
    print("La capitale d' $pays est $ville\n");
    }
    else {
    print("La capitale du-e $pays est $ville\n");
    }
}


?>