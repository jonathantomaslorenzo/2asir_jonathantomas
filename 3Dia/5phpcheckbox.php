<?php

Proceso();

// ---------- Funciones ---------------

function Proceso(){
	if (isset($_POST['suma'])) {
	for ($i = 1; $i <= 5; $i++) { 
	$totalsuma += $_POST['numero'.$i];		
	   }
	echo "La suma es: ".$totalsuma;
	echo "<br>";
	}

  if (isset($_POST['resta'])) {
	for ($i = 1; $i <= 5; $i++){
    $totalresta -= $_POST['numero'.$i];
	  }
    echo "La resta es: ".$totalresta;
    echo "<br>";
    }

}
?>