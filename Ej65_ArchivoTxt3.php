<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de alumnos</title>
</head>
<body>
    <h2>Registro de alumnos de 3°</h2>
    <form method="POST">
        <label>Nombre del alumno:<label>
        <input type="text" name="nombre">
        <br>

        <label>edad del alumno:<label>
        <input type="number" name="edad">
        <br>

        <label>pasatiempos del alumno:<label>
        <input type="text" name="pasatiempos">
        <br>

        <button type="submit" name="guardar">Guardar</button>

        <button type="submit" name="eliminar">Eliminar</button>
    </form>
    <?php
    if (isset($_POST['eliminar'])) {
        file_put_contents("Nombres.txt", "");
        file_put_contents("Edades.txt", "");
        file_put_contents("Pasatiempos.txt", "");
        echo "<p>Se elimino todo lo del archivo</p>";
    }
    ?>

    <?php
    if (isset($_POST['guardar'])) {
        $nombre=$_POST['nombre'];
        $edad=$_POST['edad'];
        $pasatiempos=$_POST['pasatiempos'];
        file_put_contents("Nombres.txt",$nombre.PHP_EOL,FILE_APPEND);
        file_put_contents("Edades.txt",$edad.PHP_EOL,FILE_APPEND);
        file_put_contents("Pasatiempos.txt",$pasatiempos.PHP_EOL,FILE_APPEND);
        echo "<p>Datos guardados correctamente.</p>";
    }
    ?>

    <h3>Lista de alumnos de 3°A registrados</h3>
    <?php
    if (file_exists("Nombres.txt")) {
        $contenido=file_get_contents("Nombres.txt");
        echo nl2br($contenido);
    }
    ?>


    <?php
if (file_exists("Edades.txt")) {
  $contenido=file_get_contents("Edades.txt");
  echo nl2br($contenido);
}
?>

<?php
if (file_exists("Pasatiempos.txt")) {
  $contenido=file_get_contents("Pasatiempos.txt");
  echo nl2br($contenido);
}
?>