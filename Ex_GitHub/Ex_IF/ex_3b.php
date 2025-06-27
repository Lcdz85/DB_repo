<?php

$n1 = readline ("Premier chiffre (entre 0 et 10): ");
$n2 = readline ("Deuxième chiffre (entre 0 et 10): ");
$operation = readline ("Choisis une opréartion (+, -, x ou /) : ");

if ($operation == "+"){
    print($n1." + ".$n2." = ".($n1+$n2));
}
elseif ($operation == "-"){
    print($n1." - ".$n2." = ".($n1-$n2));
}
elseif ($operation == "x"){
    print($n1." x ".$n2." = ".($n1*$n2));
}
else {
    print($n1." : ".$n2." = ".($n1/$n2));
}

?>
