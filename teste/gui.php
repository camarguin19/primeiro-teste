<?php

$n1 = 10;
$n2 = 10;
$n3 = 10;
$n4 = 10;

$media; 

if ($n1 <= 10) {
    echo "N1 validado <br/>";
    if ($n2 <= 10) {
        echo "N2 validado <br/>";
        if ($n3 <= 10) {
            echo "N3 validado <br/>";
            if ($n4 <= 10) {
                


                $media = ($n1 + $n2 + $n3 + $n4) / 4;
                echo "O resultado da média é: {$media}";

            }
        }
    }
    

}

if ($n1 <= 10 AND $n2 <= 10 AND $n3 <= 10 AND $n4 <= 10) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    echo "O resultado da média é: {$media}";
} else {
    echo "Cálculo não realizado! Nota inválida";

}

?>