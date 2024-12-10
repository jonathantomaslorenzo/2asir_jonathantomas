<?php

/* 8.-) Se considera una matriz 4x7 con valores numéricos enteros. 
	a) Visualizar las filas donde todos los valores sean positivos.
	b) Visualizar la suma de la fila 1 (segunda  fila).
   	c) Visualizar la suma de la columna 3 (cuarta columna) */
   

//---------------MAIN-----------------//
$matriz = array (
           array (1,2,3,4,5,6,1),
           array (1,2,3,-4,5,6,1),
           array (1,12,3,4,5,6,1),
           array (1,2,3,4,5,6,1),
          
           );
          
           

Visualizar1 ($matriz);   // ---- opcion a

$resul =Proceso2 ($matriz);  // ---- opcion b
Visualizar2 ($resul);


$resul =Proceso3 ($matriz);  // ---- opcion c
Visualizar3 ($resul);
//---------------FUNCIONES-----------------//

// a) Visualizar las filas donde todos los valores sean positivos.
function Visualizar1($mat){
       for ($i=0; $i < count($mat); $i++){
           $sw=0;
           for ($k=0; $k < count($mat[$i]); $k++){
               if ($mat[$i][$k] < 0) {
                   $sw=1;
               }
           }
           if ($sw == 0){
               echo "La fila ".$i." tiene todos sus valores positivos"."<br>";
           }
               
       }
    
}



// 	b) Visualizar la suma de la fila 1 (segunda  fila).
function Proceso2 ($mat){
    $suma=0;
       for ($k=0; $k < count($mat[1]); $k++){
          
               $suma += $mat[1][$k];
       }
       return $suma;
    
}

function Visualizar2($dato){
    echo "Suma de valores de la segunda fila: ".$dato."<br>";
}







//  	c) Visualizar la suma de la columna 3 (cuarta columna) 
function Proceso3 ($mat){
    $suma=0;
       for ($i=0; $i < count($mat); $i++){
          
               $suma += $mat[$i][3];
       }
       return $suma;
    
}

function Visualizar3($dato){
    echo "Suma de valores de la cuarta columna: ".$dato."<br>";
}

?>