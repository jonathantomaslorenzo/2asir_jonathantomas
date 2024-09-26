<?php

/*Dado dos numeros, si el primero es mayor que el segundo visualizar los numeros compendidos entre ambos e inclusives. 
*/

$num1 = 10; 
$num2 = 5;
Proceso($num1, $num2);


function Proceso ($num1, $num2){
	
	for ($i=$num1; $i >= $num2; $i--){
		Visualizar($i);
	}

}

function Visualizar ($i){
	echo $i . "<br>" ;
}

?>