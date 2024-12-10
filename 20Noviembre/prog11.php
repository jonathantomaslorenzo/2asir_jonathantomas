<?php

/* 5.-) Se declara una matriz de 6x4 con valores numéricos. Se pide: 
a) Guardar en el último elemento de cada fila la suma de los anteriores en su fila. 
b) Visualizar la suma de todos valores de la ultima columna, es decir, la suma de todos los sumandos anteriores. */
   

//---------------MAIN-----------------//
$matriz = array (
           array (1,2,3,4),
           array (5,6,7,8),
           array (9,10,11,12),
           array (1,2,3,4),
           array (5,6,7,8),
           array (9,10,11,12)
           );
          
           

Proceso ($matriz);
Visualizar ($matriz);



//---------------FUNCIONES-----------------//

function Proceso (&$mat){
       for ($i=0; $i < count($mat); $i++){
           $suma =0;
           for ($k=0; $k < count($mat[$i])-1; $k++){
               $suma += $mat[$i][$k];
           }
           $mat[$i][count($mat[$i])-1] = $suma;
               
       }
    
}


function Visualizar ($mat){
    foreach ($mat as $fila){
        foreach ($fila as $valor){
            echo $valor."  ";
        }
          echo "<br>";
    }
  
}
?>