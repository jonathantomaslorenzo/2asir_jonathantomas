<?php 
/* Se declara un array con valores numéricos y se modifica el array de forma que los valores negativos pasen a positivos */

$numeros = array(2, -5, 7, 23, -9);




// --------------- PROGRAMA PRINCIPAL --------------------
function Proceso($numeros) {
    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] < 0) {
            $numeros[$i] = $numeros[$i] * (-1);
        }
    }
    return $numeros;
}

function Visualizar($numeros) {
    foreach ($numeros as $valor) {
        echo $valor . " ";
    }
}

$numeros = Proceso($numeros);
Visualizar($numeros);
// ------------------------------------------------------
?>
