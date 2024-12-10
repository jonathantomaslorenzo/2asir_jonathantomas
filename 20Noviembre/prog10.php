<?php

/* 6.-) Dado un array tab1 con 8 valores numéricos, guardar en otro array tab2 las sumas de los
divisores de cada valor de tab1 (excluido el mismo). Es decir, la suma de los divisores del primer
elemento de tab1 se guarda en la primera posición de tab2, y así sucesivamente. Visualizar tab2.
 */
   

//---------------MAIN-----------------//
$tab1 = array(2,3,4,5,6,7,8,9);
          
 $tab2 = Proceso ($tab1);       

Visualizar ($tab2);



//---------------FUNCIONES-----------------//

function Proceso ($tab1){
       $tab_aux = array();
       for ($i=0; $i < count($tab1); $i++){
         
         // ------ calculo de la suma se los divisiores de $tab1[$i]
         $suma=0;
         for ($k=$tab1[$i]-1; $k >=1; $k--){
            if ($tab1[$i] % $k == 0){
                $suma += $k;
            }
         }
         $tab_aux[] = $suma;
               
       }
        return $tab_aux;
}


function Visualizar ($tab){
    foreach ($tab as $valor){
       
          echo $valor." ";
    }
  
}
?>