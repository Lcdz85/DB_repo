<?php

$age = readline("Quel âge avez-vous? ");

while ($age <0 OR $age > 130){
    $age = readline("Erreur! Quel âge avez-vous? ");
}

if ($age < 18){ 
    print("Vous êtes encore trop jeune");
}
else {
    print("Bienvenue!");
}

?>