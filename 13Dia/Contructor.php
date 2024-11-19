<?php
 /*Declarar una clase que contenga el nombre , el lugar de nacimiento y los colores favoritos de una persona. Los colores en un array.  
Crear un objeto persona mediante un constructor y visualizar los datos */


class Persona {
  private $nombre;
  private $localidad;
  private $colores;

  function __construct($nombre, $localidad, $colores) {
    $this->nombre = $nombre; 
    $this->localidad = $localidad;
    $this->colores = $colores;
  }

  function get() {
    return "Nombre: " . $this->nombre . " " . 
           "Lugar de nacimiento: " . $this->localidad . "<br>" .
           "Colores favoritos: " . implode(", ", $this->colores) . "<br>";


          /* "Mi nombre es " . $this->nombre . "naci en " . $this->localidad . "mis colores favoritos son " . implode(",", $this->colores) . "<br>" */


  }
}

$colores = ["Rojo", "Azul"];
$nombre = "Pedro";
$localidad = "Galacia";

$persona = new Persona($nombre, $localidad, $colores);
echo $persona->get();
?>
