
<?php

/* En un array tenemos nombres de localidades, en concreto 4.
 Y en otro array tenemos la cantidad de litros que llovio ayer en cada una de estas localidades
 Se trata de obtener un mensaje de la forma:
 En Chiclana ayer llovio 10 litros - En Conil ayer llovio 5 litros*/

$array_ciudades = "Chiclana Conil Jerez Cadiz";
$array_litros = "20 10 15 7";
$tablaciu = explode(" ", $array_ciudades);
$tablalit = explode(" ", $array_litros);

function Proceso($tablaciu, $tablalit){

	for ($i=0; $i < 4 ; $i++) { 	
	echo "En ". $tablaciu[$i] ." ayer llovio ". $tablalit[$i] . " litros de agua <br>";
	}
}

Proceso($tablaciu, $tablalit);

?>