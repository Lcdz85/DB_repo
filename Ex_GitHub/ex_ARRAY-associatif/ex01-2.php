<?php
// Exercice 1
$filmo = [
    "Her" => "Spike Jonze",
    "Drive" => "Nicolas Refn",
    "se7en" => "David Fincher"
];
foreach ($filmo as $film => $real){
    print("'$film' réalisé par $real\n");
}
print("\n");

// Exercice 2
$filmo["Her"] = "Ed Wood";

foreach ($filmo as $film => $real){
    print("'$film' réalisé par $real\n");
}