<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    /* Variables */
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $tipo = $_POST["tipo"];
    $documento = $_POST["documento"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $email = $_POST["email"];

    $fechaActual = date("d-m-20y");

   /*  $edad = $fechaActual - $fechaNacimiento;
    echo $edad; */


    ?>

    <fieldset>
        <legend>
            Baremación al <?php echo $fechaActual ?>
        </legend>

        <p>SOLICITANTE: <?php echo $nombre . " " . $apellidos  ?></p>
        <p>NIF: <?php echo $documento ?></p>
        <p>Edad en el año 2020: <?php echo $fechaNacimiento ?></p>
        <p>Correo: <?php echo $email ?></p>

    </fieldset>
</body>

</html>