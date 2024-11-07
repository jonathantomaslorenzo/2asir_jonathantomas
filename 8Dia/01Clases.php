<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  public function inicializar($nom)
  {
    $this->nombre = $nom;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo '<br>';
  }
}

$nombres = ["Juan", "Ana", "Carlos", "Maria"];
$personas = [];

foreach ($nombres as $nombre) {
  $persona = new Persona();
  $persona->inicializar($nombre);
  $persona->imprimir();
  $personas[] = $persona; 
}
?>
</body>
</html>
