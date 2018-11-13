<?php
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];



$validacion = false;

if ($correo == "" && $contraseña == "") {
    $validacion = true;
    session_start();
    $_SESSION["correo"] = $correo;
}

if ($validacion == true) {
    header("Location: sesion_iniciada.php");
}
else {
    header("Location: iniciar_sesion.php?error=1");
}
?>