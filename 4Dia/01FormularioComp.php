<?php


$nombre      = $_POST['nombre'];
$apellidos   = $_POST['apellidos'];
$edad        = $_POST['edad'];
$peso        = $_POST['peso'];
$genero      = $_POST['genero'];
$estadoCivil = $_POST['estadoCivil'];
$cine        = $_POST['cine'];
$deporte     = $_POST['deporte'];
$literatura  = $_POST['literatura'];
$musica      = $_POST['musica'];
$tebeos      = $_POST['tebeos'];
$television  = $_POST['television'];



if ($nombre == ""){
    echo "El nombre se encuentra vacio";
} else {
    echo " Su nombre es: " . $nombre;
    echo "<br>";
}

if ($apellidos == ""){
    echo "El campo apellidos se encuentra vacio";
} else {
    echo " Sus apellidos son : " . $apellidos;
    echo "<br>";
}
if (isset($edad) && $edad !== ""){
    if ($edad == 'menosde20') {
        echo "Tiene: Menos de 20 años";
        echo "<br>";
    } elseif ($edad == 'entre20y39') {
        echo "Tiene: Entre 20 y 39 años";
        echo "<br>";
    } elseif ($edad == 'entre40y59') {
        echo "Tiene: Entre 40 y 59 años";
        echo "<br>";
    } elseif ($edad == 'masde60') {
        echo "Tiene: 60 años o más";
        echo "<br>";
    } else {
        echo "Selecciona una edad";
        echo "<br>";
    }
} else {
        echo "El campo de edad no ha sido rellenado";
    } 
   

if (isset($peso) && $peso !== ""){
    echo "Su peso es: " . $peso . " kilogramos";
    echo "<br>";
}

if (isset($genero) && $genero !== ""){
   
    if($genero == "hombre"){
        echo "Su genero es hombre";
        echo "<br>";
    } else {
        echo "Su genero es mujer";
        echo "<br>";
    }

} else {
    echo "Seleccione un genero";
}


if (isset($estadoCivil) && $estadoCivil !== ""){
   
    if($estadoCivil == "soltero"){
        echo "Su estado civil es soltero";
        echo "<br>";
    } elseif ($estadoCivil == "casado"){
        echo "Su estado civil es casado";
        echo "<br>";
    } else {
        echo "Su estado civil es otro";
        echo "<br>";
    }
  
} else {
    echo "Seleccione un estado civil";
}


if (isset($cine) && $cine !== ""){
    echo "Le gusta ir al cine";
    echo "<br>";
}
if (isset($literatura) && $literatura !== ""){
    echo "Le gusta la literatura";
    echo "<br>";
}
if (isset($tebeos) && $tebeos !== ""){
    echo "Le gusta los tebeos";
    echo "<br>";
}
if (isset($television) && $television !== ""){
    echo "Le gusta la television";
    echo "<br>";
}
if (isset($musica) && $musica !== ""){
    echo "Le gusta la musica";
    echo "<br>";
}
if (isset($deporte) && $deporte !== ""){
    echo "Le gusta hacer deporte";
    echo "<br>";
}

?>