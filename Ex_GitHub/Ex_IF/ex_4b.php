<?php

$year = readline ("Année: ");
$abs = readline ("Nombre d'absence: ");
$presence = 100-($abs*2);
// print("Présence: ".$presence);

if ($year == 1){
    if ($presence >= 80){
        print("\nPrésence OK");
    }
    else {
        print("\nTrop d'absences");
    }
}
if ($year == 2){
    if ($presence >= 70){
        print("\nPrésence OK");
    }
    else {
        print("\nTrop d'absences");
    }
}
if ($year == 3){
    if ($presence >= 60){
        print("\nPrésence OK");
    }
    else {
        print("\nTrop d'absences");
    }
}

