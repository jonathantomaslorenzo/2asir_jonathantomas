<?php

$tabla_numeros = array(3, 27, 12, 9, 45, -32);
$mayor = -99999;

function Proceso($tabla_numeros) {
    $mayor = -99999; 
    
    for ($i = 0; $i <=7; $i++) {
        if ($tabla_numeros[$i] > $mayor) {
            $mayor = $tabla_numeros[$i];
        }
    }

    return $mayor;
}

function Visualizar($dato) {
    echo "El numero mayor es: " . $dato;
}

function Visualizar2($tab) {
    echo "<br> El numero mayor usando max es: " . max($tab);
}

$result = Proceso($tabla_numeros);
Visualizar($result);
Visualizar2($tabla_numeros);

?>
