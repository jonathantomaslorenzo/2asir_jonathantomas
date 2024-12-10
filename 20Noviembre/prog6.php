<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Numero1<input type="number" name="n1"></br>
        Numero2<input type="number" name="n2"></br>
        Numero3<input type="number" name="n3"></br>
        Numero4<input type="number" name="n4"></br>
        Numero5<input type="number" name="n5"></br>
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function SolicitarDatos(){

            for($i = 1; $i <= 5; $i++){
                $numeros[$i]=$_POST['n'.$i];
            }

            return $numeros;

        }

        function Calculos($entrada){
            $tab=[];
            $mayor = max($entrada);
            $menor = min($entrada);
            $media = array_sum($entrada)/count($entrada);
            array_push($tab, $mayor,$menor,$media);
            return $tab;

        }

        function Visualizar($tab_resultados){
            
                echo "El mayor es: ".$tab_resultados[0]."<br>"."El menor es: ".$tab_resultados[1]."<br>"."La media es: ".$tab[2];
            
        }

        $entrada=SolicitarDatos();

        $mayor = -99999;
        $menor = 99999;

        $tabla_resultados = Calculos($entrada,$mayor,$menor,$media);

        Visualizar($tabla_resultados);

    }
?>