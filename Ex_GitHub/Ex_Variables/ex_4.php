
<?php
//Créez une variable contenant le prix d'un ticket pour l'UGC et une autre contenant le prix d'un ticket pour le Vendôme. 
//Calculez la différence de prix entre les deux tickets et affichez-la sur l'écran avec un message.

$ugcPrix = 12;
$vendomePrix = 10;
$difference = abs($ugcPrix-$vendomePrix);

print("\nDifférence de prix: ". $difference);

?>