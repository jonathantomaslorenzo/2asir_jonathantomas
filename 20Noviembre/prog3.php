<?php
/*1.-) Dos números amigos son dos números enteros positivos a y b tales que la suma de los divisores propios de uno es igual al otro número y viceversa, es decir σ(a)=b y σ(b)=a, donde σ(n) es igual a la suma de los divisores de n, sin incluir a n. (La unidad se considera divisor propio, pero no lo es el mismo número.).
Un ejemplo es el par de naturales (220, 284), ya que:
•	los divisores propios de 220 son 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 y 110, que suman 284;
•	los divisores propios de 284 son 1, 2, 4, 71 y 142, que suman 220.
Si un número es amigo de sí mismo (es igual a la suma de sus divisores propios), recibe entonces el nombre de número perfecto.
Enunciado del ejercicio: Dados dos números enteros, visualizar si son amigos
*/
// ------------------------- PROGRAMA PRINCIPAL -------------------------------
$num1=220;
$num2=284;
$aux1=0;
$aux2=0;

$resul1=Amigo($num1);
$resul2=Amigo($num2);
Visualizar ($num1, $num2, $resul1, $resul2);


// --------------------- COMPRUEBA SI UN NUMERO ES AMIGO ----------------
function Amigo($num){
    $acum=0;
	for($i=1;$i<$num;$i++){		//bucle FOR que comprueba los divisores de num1 y los suma en aux1
		if($num % $i==0){
			$acum += $i;
		}
	}
	return $acum;
}

// ------------------ VISUALIZA SI DOS NUMEROS SON AMIGOS O NO -------------------
function Visualizar($num1, $num2, $resul1, $resul2){
	if($num1 == $resul2 && $num2 ==$resul1){
		echo "Los dos numeros son numeros amigos";
	}
	else{
		echo "Los dos numeros NO son numeros amigos";
	}
}
