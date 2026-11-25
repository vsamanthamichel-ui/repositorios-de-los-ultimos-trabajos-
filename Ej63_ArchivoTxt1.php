<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>GUARDAR INFORMACION</title>
</head>
<body>
	<h2>Guardar informacion de un archivo</h2>

<?php
    $nombre = "Ana Lopez";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL,FILE_APPEND);
    echo "informacion cuardada correctamente.";
    echo "<br><br>";
?>
<?php
    echo "<br><br>";
    $nombre = "laila cossio";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL,FILE_APPEND);
    echo "alumna agregado correctamente.";
?>
<?php
    echo "<br><br>";
    $contenido = file_get_contents("alumnos.txt");
    //echo $contenido;
    echo nl2br($contenido);

?>
</body>
</html>