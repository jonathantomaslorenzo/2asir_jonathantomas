<?php

/* Validar una direccion de correo electronico con una serie de filtros o condiciones  
- Que contenga 1 sola vez el caracter @
- El dominio debera ser .com .es o .org
- Con un explode sacas la ultima parte, el dominio a partir del @
- Con un explode sacas la ultima parte, el dominio a partir del .
*/

function validarCorreo($correo) {
    if (substr_count($correo, '@') != 1) {
        return "Correo inválido: debe contener exactamente un '@'.";
    }

    $partes = explode("@", $correo);
    $local = $partes[0];
    $dominio = $partes[1];

    $dominioPartes = explode(".", $dominio);

    if (count($dominioPartes) < 2) {
        return "Correo invalido, dominio incompleto.";
    }

    $extension = end($dominioPartes);

    $dominiosPermitidos = array("com", "es", "org");
    if (!in_array($extension, $dominiosPermitidos)) {
        return "Correo invslido, el dominio debe ser .com, .es o .org.";
    }

    return "Correo validado";
}

$correo = "informatica@iespicasso.com";
echo validarCorreo($correo);

/* Hecho por el maestro

$email = "informatica@iespicasso.com";
$veces1 = substr_count($email, "@");

...
...

*/
?>
