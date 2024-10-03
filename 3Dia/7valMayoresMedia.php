<?php 
/*Dados 7 valores en un formulario con las correspondientes cajas de texto, visualizar aquellos valores en el backend (php) que sean superiores a la media de todos.*/
if (!isset ($_POST['submit']))  {  ?>
<html>
<body>

<form action="7valMayoresMedia.php" method="post">
	Numero 1 <input type="number" name="numero1">
	<br>
	Numero 2 <input type="number" name="numero2">
	<br> 
	Numero 3 <input type="number" name="numero3"> 
	<br>
	Numero 4 <input type="number" name="numero4"> 
	<br>
	Numero 5 <input type="number" name="numero5">  
	<br>
	Numero 6 <input type="number" name="numero6"> 
	<br>
	Numero 7 <input type="number" name="numero7">  
	<br>

	<input type="submit" value="Calcular">

</form>
</body>
</html>
<?php
} else {

$media = Media();
Visualizar($media);

// Funciones


function Media(){
	
	$acum = 0;

	for ($i = 1; $i < = 7 ; $i++) { 
		$acum += $_POST['numero'.$i]; // Suma todos los numero recogidos desde el formulario
	
	}
	return $acum / 7
}


function Visualizar($media){
	for ($i = 1; $i < = 7 ; $i++) {
		if ($_POST['numero'.$i] > $media){
			echo $_POST['numero'.$i];
		}

	}
}

?>