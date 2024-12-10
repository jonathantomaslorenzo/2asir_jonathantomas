<?php
  // ejercicio 7
  // -------------------------- FUNCIONES ----------------------
        function Diferencia($tab){

            $max=-1;
            $min=999999;

            for($i = 0; $i < count($tab); $i++){
                if($tab[$i] > $max){
                    $max = $tab[$i];
                }
            }
            for($i = 0; $i < count($tab); $i++){
                if($tab[$i] < $min){
                    $min = $tab[$i];
                }
            }

            $diferen = $max-$min;

            return $diferen;

        }

        function BuscarFila($m){

            $minDife = 99999;

            for($j = 0; $j < count($m); $j++){
                $r = Diferencia($m[$j]);
                if ($r < $minDife){
                    $minDife = $r;
                    $fila = $j;
                }
            }

            return array($fila, $minDife);

        }

        function Visualizar($mat, $resul){
            echo "fila ".$resul[0].": ";
            for($k = 0; $k < count($mat[$resul[0]]); $k++){
                echo $mat[$resul[0]][$k].", ";
            }
            echo "con ".$resul[1]." de diferencia entre el mayor y el menor";
        }
    // ------------- PROGRAMA PRINCIPAL -----------------
        $matriz = array(
            array(2,5,4,200),
            array(12,5,7,10),
            array(88,2,500,10)
        );

        $resultado = BuscarFila($matriz);
        Visualizar($matriz, $resultado);
    

?>