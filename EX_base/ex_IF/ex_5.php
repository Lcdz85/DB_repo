<?php

$p1 = readline ("combien voulez-vous de Samsung Galaxy S24? ");
$p2 = readline ("Combien voulez-vous de IPhone 15? ");
$p3 = readline ("Combien voulez-vous de Huawei P60 Pro? ");
$livraison = readline ("Voulez-vous utiliser le service de livraison? (oui/non) ");
$fidelite = readline("Avez-vous une carte de fidélité? (oui/non) ");

if ($p1 < 5){
    $prix_p1 = $p1*1000;
    // print ("\nPrix Samsung Galaxy S24: ".$prix_p1." Eur");
}
else {
    $prix_p1 = ($p1*1000)-($p1*100);
    // print ("\nPrix Samsung Galaxy S24: ".$prix_p1." Eur");
}

if ($p2 < 5){
    $prix_p2 = $p2*1500;
    // print ("\nPrix IPhone 15: ".$prix_p2." Eur");
}
else {
    $prix_p2 = ($p2*1500)-($p2*150);
    // print ("\nPrix IPhone 15: ".$prix_p2." Eur");
}

if ($p3 < 5){
    $prix_p3 = $p3*800;
    // print ("\nPrix Huawei P60 Pro: ".$prix_p3." Eur");

}
else {
    $prix_p3 = ($p3*800)-($p3*80);
    // print ("\nPrix Huawei P60 Pro: ".$prix_p3." Eur");

}

$total = $prix_p1 + $prix_p2 + $prix_p3;


if ($livraison == "oui"){
    if ($total > 3000){
        print("livraison gratuite");
    }
    else {
        $total = $total * 1.02;
    }
}

if ($fidelite == "oui"){
    $total = $total * 0.8;
    print("\nPrix Fidélité: ".$total." Eur");
}
else {
    print("\nPrix total: ".$total." Eur");
}
?>