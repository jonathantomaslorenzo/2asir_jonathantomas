<?php
/* Almacenar en una matriz la informacion de varios coches de un concesionario, mediante arrays asociativos, visualizar la marca y el modelo de aquellso coches cuyo precio sea superior a 30000 euros 
Array asociativo
*/

$car = array(

array("Marca" =>" Audi", "Modelo" => "A7",  "Puertas" =>5 , "Color" => "Negro" , "Caballos" => 300 , "Precio" => 70000),
array("Marca" => "Toyota", "Modelo" => "Supra", "Puertas" => 4, "Color" => "Rojo", "Caballos" => 130, "Precio" => 25000),
array("Marca" =>" Audi", "Modelo" => "X7",  "Puertas" =>5 , "Color" => "Azul" , "Caballos" => 200 , "Precio" => 50000));



foreach ($car as $coche) {
  if ($coche["Precio"] > 30000){
  	echo $coche["Marca"] . " " . $coche["Modelo"] ."<br>";

  }

}



?>