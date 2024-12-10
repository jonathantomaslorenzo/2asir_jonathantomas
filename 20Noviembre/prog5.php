<?php
/* 6.-)  PRACTICO. Se considera un array asociativo con las notas de un alumno en las tres evaluaciones.
         'Matematicas'  6 , 'Lengua  4, 'Inglés 8, 'Informática'  7
         'Matematicas'  5 , 'Lengua  3, 'Inglés  7, 'Informática' 8
         'Matematicas'  5 , 'Lengua  4, 'Inglés  7, 'Informática' 9
 a) Visualizar  qué evaluación tiene mayor nota media
 b) Visualizar qué asignaturas tiene todas sus notas suspensas.
 */
 
$mat = array ("1eval"=>array ('Matematicas'=> 6 , 'Lengua' => 4, 'Ingles' => 8, 'Informatica'=>  7),
                "2eval"=> array ('Matematicas'=> 5 , 'Lengua' => 3, 'Ingles' => 7, 'Informatica'=>  8),
                "3eval"=>array ('Matematicas'=> 9 , 'Lengua' => 4, 'Ingles' => 7, 'Informatica'=>  9)
              );
  
  

// ---------- APARTADO A ----------------------------------------------------
 $resul = Proceso1 ($mat);
 Visualizar1 ($resul);
 
 // ---------- APARTADO B ----------------------------------------------------

 Visualizar2 ($mat);
 
 
 // --------------------- FUNCIONES APARTADO A --------------------------

function Proceso1 ($mat){  
	$mayor=0;		
	foreach ($mat as $eval => $fila){
	    $media = ObtenerMedia ($fila);
	    
	    if ($media > $mayor){
	        $mayor = $media;
	        $mayor_evaluacion = $eval;
	    }
	    
	}
	return $mayor_evaluacion;
}

function ObtenerMedia ($tab){
    $acum=0;
    foreach ($tab as $valor){
        $acum += $valor;
    }
    $media = $acum / count($tab);
    return $acum;
}

function Visualizar1($dato){
    echo "la evaluacion con mayor media es: ".$dato."<br>";
}
	

 // ------------------------ FUNCIONES APARTADO B -------------------------
 
function Visualizar2 ($mat){
   if ($mat["1eval"]["Matematicas"] < 5 && $mat["2eval"]["Matematicas"] < 5  && $mat["3eval"]["Matematicas"] < 5){
       echo "Tiene suspendida Matemáticas en las tres evaluaciones";
   }
   
    if ($mat["1eval"]["Lengua"] < 5 && $mat["2eval"]["Lengua"] < 5  && $mat["3eval"]["Lengua"] < 5){
       echo "Tiene suspendida Lengua en las tres evaluaciones";
   } 
   
    if ($mat["1eval"]["Ingles"] < 5 && $mat["2eval"]["Ingles"] < 5  && $mat["3eval"]["Ingles"] < 5){
       echo "Tiene suspendida Ingles en las tres evaluaciones";
   } 
    if ($mat["1eval"]["Informatica"] < 5 && $mat["2eval"]["Informatica"] < 5  && $mat["3eval"]["Informatica"] < 5){
       echo "Tiene suspendida Informatica en las tres evaluaciones";
   } 
}
?>