<?php

    if (!isset ($_POST['calcular'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="" >
        Frase<input type="text" name="frase">
        Palabra a buscar<input type="text" name="palabra">
        <input type="submit" name="calcular">
    </form>
</body>
</html>

    <?php } else {

        function ContienePalabra($frase,$palabra){

            $contenida = false;
            $i=0;
            while ($contenida == false and $i < count($frase)){
                if($frase[$i] == $palabra){
                    $contenida = true;
                    
                } else {
                    $i++;
                }
            }

            return $contenida;
        }

        function Visualizar($f,$p,$r){
            if($r){
                echo "La frase '".$f."' SI contiene la palabra '".$p."'";
            }else{
                echo "La frase '".$f."' NO contiene la palabra '".$p."'";
            }
            
        }

        $f = $_POST['frase'];
        $p = $_POST['palabra'];
        $vector = explode(" ", $f);

        Visualizar($f,$p,ContienePalabra($vector,$p));

    }
?>