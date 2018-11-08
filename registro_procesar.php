<?php
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$especialidad = $_POST["especialidad"];
$lugares = $_POST["lugares"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

header("Location: registro_exitoso.php");

?>