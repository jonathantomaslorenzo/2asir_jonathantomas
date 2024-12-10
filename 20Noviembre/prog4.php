<?php 
/*
3.-) Dado un número de D.N.I. o N.I.F. sin la letra, se pide visualizar el mismo número pero añadiéndole la letra que le corresponde.
La letra del NIF se obtiene a partir de un algoritmo conocido como módulo 23. El algoritmo consiste en aplicar la operación aritmética de módulo 23 al número del DNI. El módulo 23 es el número entero obtenido como resto de la división entera del número del DNI entre 23. El resultado es un número comprendido entre el 0 y el 22. En base a una tabla conocida se asigna una letra. La combinación del DNI con esa letra es el NIF.  Tabla de asignación:
0	1	2	3	4	5	6	7	8	9	10	11	12	13	14	15	16	17	18	19	20	21	22
T	R	W	A	G	M	Y	F	P	D	X	B	N	J	Z	S	Q	V	H	L	C	K	E
*/

$tabla = array(0=>'T',1=>'R',2=>'W',3=>'A',4=>'G',5=>'M',
              6=>'Y',7=>'F',8=>'P',9=>'D',10=>'X',11=>'B',
			  12=>'N',13=>'J',14=>'Z',15=>'S',16=>'Q',
			  17=>'V',18=>'H',19=>'L',20=>'C',21=>'K',22=>'E');
			  
$dni = 31229709;

  	
// --------- PROGRAMA PRINCIPAL --------
 $resul = Proceso ($tabla, $dni);	
 
 Visualizar ($resul, $dni);

	
// ------------- funcion que obtiene la letra
function Proceso ($tabla, $dni) {
   
      $resto = $dni % 23;
	  
	  $resul = $tabla[$resto];
	  
	  return $resul;

}	
 
 function Visualizar ($resul, $dni){
    echo $dni.$resul;
 }
 ?>
