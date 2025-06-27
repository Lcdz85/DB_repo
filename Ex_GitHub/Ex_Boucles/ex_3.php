<?php

$age = readline("Quel est ton âge? ");

while ($age < 0 OR $age > 130){  
    $age = readline("Erreur! Quel est votre âge? ");
}

if ($age >= 18){
    print("Bienvenue!");
}
else {
    print("Vous êtes encore trop jeune");
}
?>