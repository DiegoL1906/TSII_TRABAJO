<?php
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$sexo = $_POST["sexo"];
$edad = $_POST["edad"];
$especialidad = $_POST["especialidad"];
$sintomas = $_POST["lugares"];
$correo = $_POST["correo"];

header("Location: registro_exitoso.php");
?>