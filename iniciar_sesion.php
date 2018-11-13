<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'cabecera.php' ?>
    <?php include 'navegador.php' ?>
    <section id="seccion">

    <?php if (isset($_GET["error"])) { ?>
    <p id="error">Informacíon incorrecta</p>
    <?php }  ?>

    <form action="sesion_procesar.php" method="post">
            <div id="inises">
            <table>
                <tr>
                    <th>
                        <label for="correo">Email:</label>
                    </th>
                    <th>
                        <input type="email" name="correo">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="contraseña">Contraseña:</label>
                    </th>
                    <th>
                        <input type="password" name="contraseña">
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <button type="submit">Iniciar sesíon</button>
                    </th>
                </tr>
            </table>
            </div>
        </form>
    </section>
    <?php include 'pie_pag.php' ?>

</body>
</html>