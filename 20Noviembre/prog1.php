
<?php 
  // --------------------- FUNCIONES ----------------
	function Convertir($v) {
		
		$mat = [];
		$col=0;
		$fila=0;
		
		for($i=0;$i<count($v);$i++){
			if($col == 5){
				$fila++;
				$col=0;
			}
			$mat[$fila][$col]=$v[$i];
			$col++;
			
		}	
		
		return $mat;
	}

	function ConvertirInversa($m) {
		
		$mat = [];
		$col=0;
		$fila=0;
		
		for($i=count($m)-1;$i>=0;$i--){
			if($col == 5){
				$fila++;
				$col=0;
			}
			$mat[$fila][$col]=$m[$i];
			$col++;
			
		}	
		
		return $mat;
	}

	function Visualizar($m){
		
		foreach ($m as $fila){
			foreach ($fila as $valor){
				echo $valor." ";
			}
			echo "\n";
		}	
		echo "\n";
		
	}
// ----------------------- PROGRAMA PRINCIPAL
        $vec = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
        
        $matriz = Convertir($vec);
        Visualizar($matriz);
        
        $matrizinversa = ConvertirInversa($vec);
        Visualizar($matrizinversa);
    
?>