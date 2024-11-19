<?php 
/* UN FORMULARIO QUE PIDA NOMBRE Y LOCALIDAD, ESE FORMULARIO LLAMA A UN PHP QUE VISUALIZA LOS DATOS INTRODUCIDOS.  */

session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nombre'] = $_POST['nombre'];  
    $_SESSION['localidad'] = $_POST['localidad'];  

    header("Location: mostrarDatos.php"); 
    exit();
}
?>

