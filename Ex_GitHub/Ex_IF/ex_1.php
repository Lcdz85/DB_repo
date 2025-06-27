<!-- Créez un code capable de calculer la surface d'une chambre. Demandez à l'utilisateur la largeur et la longueur. 
 Si les valeurs sont pareilles, affichez le message "La chambre est carrée!" -->
<?php

$larg = readline ("Quelle est la largeur de la chambre en mètre? ");
$long = readline ("Quelle est la longeur de la chambre en mètre? ");

if ($larg == $long){
    print ("\nLa chambre est carrée et la surface est de ".$larg*$long." m²"); 
}
if ($larg != $long){
    print("\nLa surface est de ".$larg*$long." m²");
}
?>