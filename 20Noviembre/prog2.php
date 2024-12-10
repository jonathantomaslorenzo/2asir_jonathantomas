<?php

 // ------------- FUNCIONES ---------

		function SeRepiten($tab1,$tab2){
            $tab=[];
			echo "Los iguales son: ";
	        $conta=0;
			for($i = 0; $i < count($tab1); $i++){

				if($tab1[$i] == $tab2[$i]){
					echo $tab1[$i]." ";
					$tab[$conta]=$i;
					$conta++;
				}
			}
			echo "\n";
            return $tab;
		}
	function Visualizar ($tab){
		echo "Posiciones.\n";
		foreach ($tab as $valor){
			echo $valor." ";
		}
	}
	
	// -------------- PROGRAMA PRINCIPAL ---------
		$t1 = array(4,6,7,8,4,5,6,8);
		$t2 = array(42,62,7,8,4,5,6,8);

		$tab = SeRepiten($t1,$t2);
		Visualizar ($tab);

    
?>