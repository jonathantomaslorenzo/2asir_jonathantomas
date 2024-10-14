<?php

/* Declarar un array con valores numericos y obtener otro array en el que el primer valor sea el mayor del anterior y el segundo valor sea el menor, por ultimo visualizar este array*/

function Proceso($mat){

$mat_resul=array();

for ($i=0; $i < count($mat); $i++) { 
    $mat_resul[$i][0]=max($mat[$i]);
    $mat_resul[$i][1]=min($mat[$i]);
     }

    return $mat_resul;
}


function Visualizar($dato){
    for ($i=0; $i < count($dato); $i++) { 

     echo $dato[$i][0]. " : ".$dato[$i][1];
     echo "<br>";
    }
}

$mat = array (
    array(7, 2, 15, -4, 33, 9),
    array(8, 9, 20, 87, 33, 3),
    array(2, -1, 13, -9, 33, 90)
);

$result = Proceso($mat);
Visualizar($result);

?>
