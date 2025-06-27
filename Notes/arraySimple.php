<?php
// création arra/tableau
// $nomTab = ["Emilie", "Laura", "Ayla"];
// print_r($nomTab);
// print("nom: ".$nomTab[1]);

// print_r qd se n'est pas uns string

$chiffreTab = [1,2,3,4,5,6];
print_r($chiffreTab);
print($chiffreTab[2]);
print($chiffreTab[1]+$chiffreTab[2]);
$chiffreTab[] = 10;
print_r($chiffreTab);
$chiffreTab[0]= 8;
print_r($chiffreTab);
// effacer un élément
unset($chiffreTab[1]);  # efface la valeur et l'index sans réorganiser l'index
print_r($chiffreTab);

# Créer un tableau vide
$autreTab = [];
$autreTab[]= "pepe";
print_r($autreTab);