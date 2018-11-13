<nav>
    <ul>
        <?php if (isset($_SESSION["usuario"])) { ?>
            <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
            <li><a href="consultas.php">Ver consultas</a></li>
            <li><a href="modificar.php">Modificar cuenta</a></li>
        <?php } else { ?>
            <li><a href="presentacion.php">¿Quienes somos?</a></li>
            <li><a href="consulta.php">Realiza una consulta</a></li>
            <li><a href="registro.php">Únete a nosotros</a></li>
            <li><a href="iniciar_sesion.php">Iniciar sesión</a></li>
        <?php } ?>
    </ul>
</nav>