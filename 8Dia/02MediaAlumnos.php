<!DOCTYPE html>
<html>
<head>
  <title>Pruebas</title>
</head>
<body>
<?php
// Declarar una clase Alumnos con su nombre y sus 3 notas, a continuación declarar 2 objetos alumnos visualizando la media de cada uno de ellos

class Alumnos {
  private $nombre;
  private $nota1;
  private $nota2;
  private $nota3;

  public function media($nombre, $nota1, $nota2, $nota3)
  {
    $this->nombre = $nombre;
    $this->nota1 = $nota1;
    $this->nota2 = $nota2;
    $this->nota3 = $nota3;
  }

  public function imprimir()
  {
    $media = ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    echo $this->nombre . " tiene una media de: " . $media . "<br>";
  }
}

class Profesor {
  private $nombre;
  private $asignatura;

  public function inicializar($nombre, $asig)
  {
    $this->nombre = $nombre;
    $this->asignatura = $asig;  
  }

  public function imprimirAsignatura()
  {
    echo $this->nombre . " imparte la asignatura " . $this->asignatura . "<br>";  
  }
}

$alumno1 = new Alumnos();
$alumno1->media("Pedro", 5, 7, 9);
$alumno1->imprimir();

$alumno2 = new Alumnos();
$alumno2->media("Maria", 8, 6, 7);
$alumno2->imprimir();

$profesor = new Profesor();
$profesor->inicializar("Diego", "Mates");
$profesor->imprimirAsignatura();
?>
</body>
</html>
