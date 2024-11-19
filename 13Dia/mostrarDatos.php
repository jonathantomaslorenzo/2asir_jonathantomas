<?php
session_start(); 

if (isset($_SESSION['nombre']) && isset($_SESSION['localidad'])) {
    echo "Nombre: " . $_SESSION['nombre'] . "<br>";
    echo "Localidad: " . $_SESSION['localidad'] . "<br>";
} else {
    echo "No se ha recibido ningún dato.<br>";
}
?>
