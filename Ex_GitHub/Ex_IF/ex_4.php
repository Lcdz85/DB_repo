<?php

$year = readline ("En quelle année est l'élève? (1, 2 ou 3): ");
$absences = readline ("Combien d'absences a-t-il eu? ");
$presence = 100-($absences*2);

if ($year == 1){
    if ($presence < 80){
        print("Année ratée");
    }
    else {
        print("Année réussie");
    }
}
elseif ($year == 2){
    if ($presence < 70){
        print("Année ratée");
    }
    else {
        print("Année réussie");
    }
}
else {
    if ($presence < 60){
        print("Année ratée");
    }
    else {
        print("Année réussie");
    }
}
?>