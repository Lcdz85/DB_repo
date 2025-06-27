<?php
// Exercice 6
for ($i=1; $i<=200; $i++){
    $valeurs[] = $i;
};
for ($i=0; $i<200; $i++){
    echo $valeurs[$i]." ";
};

echo "\n";

// Exercice 7
foreach ($valeurs as $cle => $val){
    $valeurs[$cle] = $val*2;
    print_r(" $valeurs[$cle]");
}
?>