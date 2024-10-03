<?php

$media = Media();
Visualizar($media);

// ---------- Funciones ---------------


function Media(){	
	$acum = 0;
	for ($i = 1; $i <= 7; $i++) {

		$acum += $_POST['numero'.$i]; // Suma todos los numero recogidos desde el formulario
	
	}
	return $acum / 7;
}

function Visualizar($media){
	for ($i = 1; $i <= 7; $i++) {
		
		if ($_POST['numero'.$i] > $media){

			echo $_POST['numero'.$i];
			echo "<br>";
		}

	}
}

?>