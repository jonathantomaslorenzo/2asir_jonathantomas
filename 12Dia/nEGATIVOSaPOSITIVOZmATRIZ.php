<?php 
/* Se declara una matriz de valores numeros enteros y hacer lo mismo, transformar todo los valores numericos enteros a positivos  */
$numeros = array(   
    array(2, -5, 7, 23, -9),
    array(2, 5, 7, -3, 6),
    array(2, 1, 7, -43, 4)
);

function Proceso(&$numeros) {
    for ($i = 0; $i < count($numeros); $i++) {
        for ($j = 0; $j < count($numeros[$i]); $j++) {
            if ($numeros[$i][$j] < 0) {
                $numeros[$i][$j] = $numeros[$i][$j] * (-1);
            }
        }
    }
}

function Visualizar($numeros) {
    foreach ($numeros as $fila) {
        foreach ($fila as $valor) {
            echo $valor . " ";
        }
        echo "\n";
    }
}

Proceso($numeros);
Visualizar($numeros);
?>
