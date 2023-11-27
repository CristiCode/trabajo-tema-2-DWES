<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>

    <?php
    $fechaActual = date("d-m-20y");
    $numeroSolicitud = 1;
    ?>
</head>

<body>
    <form action="procesa.php" method="post">
        <fieldset>
            <legend>
                DATOS AL <?php echo $fechaActual ?>
                Número de Solicitud: <?php echo $numeroSolicitud ?>
            </legend>

            <section>
                <h2>Datos Personales</h2>

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos">

                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo">
                    <option value="nif">NIF</option>
                    <option value="nie">NIE</option>
                </select>

                <label for="documento">Documento</label>
                <input type="text" name="documento" id="documento">

                <label for="fechaNacimiento">Fecha Nacimiento</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento">

                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email">
            </section>

            <section>
                <h3>Forma de Acceso: </h3>
                <input type="radio" name="estudiosSuperiores" id="estudiosSuperiores">Estudios Universitarios Superiores
                <br>
                <input type="radio" name="estudiosMedios" id="estudiosMedios">Estudios Universitarios Medios
                <br>
                <input type="radio" name="formacionProfesional" id="formacionProfesional"> Formación Profesional
                <br>
                <input type="radio" name="estudiosSuperiores" id="estudiosSuperiores">Bachillerato
                <br>
                <input type="radio" name="estudiosSuperiores" id="estudiosSuperiores">Prueba de Acceso
            </section>

            <section>
                <h3>Acceso Preferente por:</h3>
                <input type="checkbox" name="familiaNumerosa" id="familiaNumerosa">Familia Numerosa
                <br>
                <input type="checkbox" name="rentaBaja" id="rentaBaja">Renta Baja
                <br>
                <input type="checkbox" name="familiaParo" id="familiaParo">Familia en paro
                <br>
                <input type="checkbox" name="minusvalia" id="minusvalia">Minusvalía
                <br>
                <input type="checkbox" name="familiaMonoparental" id="familiaMonoparental">Familia Monoparental
            </section>

            <br>
            <section>
                <input type="submit" value="Enviar">
                <input type="button" value="Borrar todo">
            </section>
        </fieldset>
    </form>
</body>

</html>