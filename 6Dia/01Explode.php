<?php

/* Dado un nombre compuesto, tan largo como queramos. Obtener solo el primer nombre propio*/

$array_nombre = "Alberto cateta rodriguez";
$tabla = explode(" ", $array_nombre);

echo $tabla[0]."<br>";

//Extras para entender
echo $tabla[1]."<br>";
echo $tabla[2]."<br>";
?>
