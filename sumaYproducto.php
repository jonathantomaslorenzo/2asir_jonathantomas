<?php

/*Dado dos numeros, visualizar dentro de una funcion su suma si son iguales, y su producto si son iguales
*/
$num1 = 8;
$num2 = 8;

function Resolucion($num1, $num2){
	
	if ($num1 == $num2) {
		$suma = $num1 + $num2 ;
  	echo "Ambos número son iguales, por lo que la suma es: $suma";

	} else {
		$producto = $num1 * $num2 ;
  	echo "Ambos numero son distintos, por lo que su producto es: $producto";
	}

}
Resolucion($num1, $num2);

?>



