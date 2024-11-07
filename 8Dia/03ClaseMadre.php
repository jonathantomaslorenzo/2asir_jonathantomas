<!DOCTYPE html>
<html>
<head>
  <title>Pruebas</title>
</head>
<body>
<?php
// Declarar una clase Personas que contenga solo el nombre y a continuación 2 classes hijas, una se llama clase profesor y otra clase alumnos. El profesor con su nombre, y los alumnos con sus 3 notas y visualizar la media


class Personas {
  private $nombre;
  public function IntroducirNombre($nombre)
  {
    $this->nombre=$nombre;
  }
  public function VisualizarNombre()
  {
    echo $this->nombre;
  } 

}

class Alumnos  extends Personas {
 
  private $nota1;
  private $nota2;
  private $nota3;

  public function media($nota1, $nota2, $nota3)
  {
    
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

class Profesor extends Personas {

  private $asignatura;

  public function inicializar($asig)
  {
   
    $this->asignatura = $asig;  
  }
  public function imprimirAsignatura()
  {
    echo $this->nombre . " imparte la asignatura " . $this->asignatura . "<br>"; 
  }
}

$alumno1 = new Alumnos();
$alumno1->media(5, 7, 9);
$alumno1->IntroducirNombre("Pedro");
$alumno1->VisualizarNombre();
$alumno1->imprimir();

$alumno2 = new Alumnos();
$alumno2->IntroducirNombre("Adam");
$alumno2->VisualizarNombre();
$alumno2->media(8, 6, 7);
$alumno2->imprimir();

$profesor = new Profesor();
$profesor->IntroducirNombre("Julia");
$profesor->VisualizarNombre();
$profesor->inicializar("Mates");
$profesor->imprimirAsignatura();
?>
</body>
</html>
