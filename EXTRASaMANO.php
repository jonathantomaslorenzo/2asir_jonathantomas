<!DOCTYPE html>
<html>
<body>

<?php  

$nombre = Jonathan;
$numeros1 = array(1,-5,9,-2,6,3,15);
$numeros2 = array(2, 5, 6,-7, -8, 10);
$numeros3 = array(1,2,3,4,5,6,7,8,9,10);
$numeros3Pares = [];
$numeros4 = array(2, 7, -4, 9, 8, 7, 6, 5);
$numeros4Inverso = [];


Proceso($nombre);
TransformarPositivo($numeros1);
SumarPares($numeros2);
FiltrarPares($numeros3, $numeros3Pares);
RevertirArray($numeros4, $numeros4Inverso);

/* Mostrar mi nombre */
function Proceso($nombre){
	echo "Mi nombre es $nombre ";
    echo "<br>";
	echo "---------------------------------------------";
    echo "<br>";
}



/* Transformar los numeros negativos a positivos */
function TransformarPositivo($numeros1){
	$minimo = 0;
	
 for ($i=0; $i < count($numeros1); $i++){   
    if ($numeros1[$i] < $minimo){
	$numeros1[$i] *= -1;
		}
    }
        foreach ($numeros1 as $numero){
    echo "Los numeros positivos son: $numero <br>";
    }
    echo "<br>";
	echo "---------------------------------------------";
    echo "<br>";
}

/* Calcular la suma de los numeros que sean pares y pasarlos a un nuevo array, y visualizarlo */

function SumarPares($numeros2){

$numerosPares = [];
$suma = 0;
	for($i=0; $i < count($numeros2); $i++){
		if($numeros2[$i] % 2 == 0){
		$numerosPares[] = $numeros2[$i];
       

		}
	}
	/* Ahora que tenemos los numeros pares en un array, hacemos la suma*/
    for($j=0; $j < count($numerosPares); $j++){
    
    $suma += $numerosPares[$j];    
    }
	echo "La suma de los numeros pares es: $suma";
	echo "<br>";
	echo "---------------------------------------------";
    echo "<br>";
    
}

/* Crea un array con 10 números enteros aleatorios. Filtra los números pares y almacénalos en otro array. Finalmente, muestra los dos arrays: el original y el filtrado. */


function FiltrarPares($numeros3, &$numeros3Pares){
	
	for($i=0; $i < count($numeros3); $i++){
	
    if($numeros3[$i] % 2 == 0){
	$numeros3Pares[] = $numeros3[$i];
    
		}	
	}
	foreach($numeros3Pares as $pares){
	echo "Los numeros pares del array son: $pares <br>";
	}
    echo "<br>";
	echo "---------------------------------------------";
    echo "<br>";

}

/* Escribe una función que reciba un array como parámetro y devuelva el array con sus elementos en orden inverso, sin usar funciones predefinidas de PHP como array_reverse. */

function RevertirArray($numeros4, &$numeros4Inverso){

	for ($i = count($numeros4)-1; $i >= 0; $i--){
	
    $numeros4Inverso[] = $numeros4[$i];
		}
	
    
    foreach($numeros4Inverso as $Inversos){
    echo "Los valores dentro del array inverso son: $Inversos <br>";
	}
    echo "<br>";
	echo "---------------------------------------------";
    echo "<br>";
}

?>  

</body>
</html>
