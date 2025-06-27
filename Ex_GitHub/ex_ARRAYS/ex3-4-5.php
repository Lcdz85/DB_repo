<?php
$villes = ["Bxl", "Paris", "Lisbonne", "Pise", "Florence"];

for ($i = 0; $i < 5; $i++) {
    echo "\n" . $villes[$i];
};

print("\n");

$villes[] = "Athènes";
$villes[] = "Liège";

for ($i = 0; $i < 7; $i++) {
    echo "\n" . $villes[$i];
};

print("\n");

$villes[0] = "Quito";

for ($i = 0; $i < 7; $i++) {
    echo "\n" . $villes[$i];
};
?>