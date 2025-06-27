<?php

$age = readline("Quel âge avez-vous? ");
$cpt = 1;
if ($cpt <= 3){
    while ($age <0 OR $age > 130 ){
        $age = readline("Erreur! Quel âge avez-vous? ");
        $cpt ++;
    }

    if ($age < 18){
        print("Vous êtes encore trop jeune");
    }
    else {
        print("Bienvenue!");
    }
}
else {
    print("Nombre d'essai atteint. Bye");
}
?>