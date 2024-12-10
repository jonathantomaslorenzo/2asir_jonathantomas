<?php

/* 2.-) Dado un array1 con valores numéricos, visualizar la suma de los guardados en las posiciones pares.  Dado un array2 con valores numéricos, visualizar la suma de los guardados en las posiciones pares. Visualizar que suma es mayor, la del primer array, la del segundo o si son iguales. */
   

//---------------MAIN-----------------//
$tabla1 = array(2,3,4,5,6,7);
$tabla2 = array(1,222,3,4,5);

$suma1 = Proceso ($tabla1);
$suma2 = Proceso ($tabla2);

Visualizar ($suma1, $suma2);


//---------------FUNCIONES-----------------//



function Proceso ($tab) {
   $suma=0;
   for ($i=0; $i < count($tab); $i++){
       if ($i % 2 == 0){
           $suma += $tab[$i];
       }
   }
   return $suma;
}


function Visualizar ($suma1, $suma2){
   if ($suma1 == $suma2){
       echo "ambas sumas son iguales";
   } else {
       if ($suma1 > $suma2){
           echo "La suma de los valores situados en las posiciones pares del primer array es mayor";
       } else {
               echo "La suma de los valores situados en las posiciones pares del segundo array es mayor";
       }
   }
}
?>