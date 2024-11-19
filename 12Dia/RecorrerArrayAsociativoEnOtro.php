<?php
$mat = array(
    "empleado1" => array(
        'Nombre' => 'Antonio Gonzalez',
        'Sueldo' => '1800'
    ),
    "empleado2" => array(
        'Nombre' => 'María López',
        'Sueldo' => '2000'
    )
);

foreach ($mat as $empleado => $datos) {
	echo $empleado . ": " . $datos['Nombre'] . "<br>";
	echo $datos['Nombre'] . " gana " . $datos['Sueldo'] ."<br>";
    
}
?>


