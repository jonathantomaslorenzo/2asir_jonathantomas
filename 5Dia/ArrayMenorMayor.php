<?php

/* Declarar un array con valores numericos y obtener otro array en el que el primer valor sea el mayor del anterior y el segundo valor sea el menor, por ultimo visualizar este array*/

function Proceso($tabla_numeros){

    $tab_resul=[];
    $tab_resul[0]=max($tabla_numeros);
    $tab_resul[1]=min($tabla_numeros);
    return $tab_resul;
}

function Visualizar($dato){
    echo $dato[0]. " : ".$dato[1]; 

}

$tabla_numeros = array(7, 2, 10, -4, 33, 9);
$result = Proceso($tabla_numeros);
Visualizar($result);




/* $diccionario_mm = array();
$mayor = -99999;
$menor =  99999;
function Proceso($tabla_numeros) {
    $mayor = -99999;  
    $menor =  99999;

    for ($i = 0; $i <=6; $i++) {
    
        if ($tabla_numeros[$i] > $mayor) {
            $mayor = $tabla_numeros[$i];
        }

        if ($tabla_numeros[$i] < $menor) {
            $menor = $tabla_numeros[$i];
        }
    }
     return array($mayor, $menor);
     

}

function Visualizar($diccionario_mm) {
    echo "El numero mayor es: " . $diccionario_mm[0];
    echo "<br>";
    echo "El numero menor es: " . $diccionario_mm[1];
}
$result = Proceso($tabla_numeros);
Visualizar($result);
*/


?>
