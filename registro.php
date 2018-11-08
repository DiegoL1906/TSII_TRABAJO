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
        <form action="registro_procesar.php" method="post">
            <div id="med">
            <table>
                <tr>
                    <th>
                        <label for="nombres">Nombre(s):</label>
                    </th>
                    <th>
                        <input type="text" name="nombres">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="apellidos">Apellidos:</label>
                    </th>
                    <th>
                        <input type="text" name="apellidos">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="dni">DNI:</label>
                    </th>
                    <th>
                        <input type="text" name="dni">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="especialidad">Especialidad:</label>
                    </th>
                    <th>
                        <select name="especialidad">
                            <option value="Medicina general">Medicina general</option>
                            <option value="Medicina interna">Medicina interna</option>
                            <option value="Geriatría">Geriatría</option>
                            <option value="Pediatría">Pediatría</option>
                            <option value="Neurología">Neurología</option>
                            <option value="Oftalmología">Oftalmología</option>
                            <option value="Odontología">Odontología</option>
                            <option value="Podología">Podología</option>
                            <option value="Psicología">Psicología</option>
                            <option value="Nutriología">Nutriología</option>
                            <option value="Psicología">Psicología</option>
                            <option value="Psiquitría">Psiquitría</option>
                            <option value="Cardiología">Cardiología</option>
                            <option value="Urología">Urología</option>
                            <option value="Otorrinolaringología">Otorrinolaringología</option>
                            <option value="Gastroenterología">Gastroenterología</option>
                            <option value="Dermatología">Dermatología</option>
                            <option value="Reumatología">Reumatología</option>
                            <option value="Ginecología">Ginecología</option>
                            <option value="Traumatología">Traumatología</option>
                            <option value="Inmunología">Inmunología</option>
                            <option value="Cirugía">Cirugía</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="lugares">Lugares de trabajo:</label>
                    </th>
                    <th>
                        <textarea name="lugares" cols="50" rows="10"></textarea>
                    </th>
                </tr>
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
                        <label for="usuario">Nombre de usuario:</label>
                    </th>
                    <th>
                        <input type="text" name="usuario">
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
                        <button type="submit">Enviar</button>
                    </th>
                </tr>
            </table>
            </div>
        </form>
    </section>
    <?php include 'pie_pag.php' ?>

</body>
</html>