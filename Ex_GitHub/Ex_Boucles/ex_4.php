<?php

$age = readline("Quel est ton âge? ");
$essai = 1;
while (($age < 0 or $age > 130) and $essai < 3) {
    $age = readline("Erreur! Quel est votre âge? ");
    $essai += 1;
}
print("\nEssais: " . $essai . "\n");

// if (($age < 0 OR $age > 130) AND $essai = 3){
//     print("Vous avez fait trop d'erreur!");
// }
// if ($age >= 18 AND $essai < 3){
//     print("Bienvenue!");
// }
// if ($age < 18 AND $essai < 3){
//     print("Trop jeune");
// }

if ($age >= 0 and $age <= 130) {
    if ($age >= 18) {
        print("Bienvenue!");
    } else {
        print("Trop jeune");
    }
} else {
    print("Vous avez fait trop d'erreur!");
}
