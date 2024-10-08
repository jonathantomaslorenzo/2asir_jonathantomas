<?php



$mayor = -99999;

function Proceso(){
	
	for (i = 1; $i <= 7; $i++){
	if ($_POST["numero".$i] > $mayor){
		$mayor = $_POST['numero'.$i];
		}
	}
	return $mayor;
}

function Visualizar($dato){
	echo "El numero mayor es: ".$dato;
}

$result = Proceso();
Visualizar($result);

echo max($_POST);
?>