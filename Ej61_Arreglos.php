<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones</title>
</head>
<body>
<?php
$indicea=array();
$indiceb=array();
$sv1=100;
$sv2=500;
$indicec=array();

echo "<h4>Matriz A</h4>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";

for ($sf=0; $sf < 3; $sf++) {
    echo "<tr>";
    for ($sc=0; $sc < 3; $sc++) {
        echo "<td>";
        $indicea[$sf][$sc]=$sv1;
        $indicec[$sf][$sc]=$indiceb[$sf][$sc]; // (Nota: tal como aparece en el código fuente)
        $sv1+=10;
        echo $indicea[$sf][$sc]. " ";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h4>Matriz B</h4>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";

for ($sf=0; $sf < 3; $sf++) {
    echo "<tr>";
    for ($sc=0; $sc < 3; $sc++) {
        echo "<td>";
        $indiceb[$sf][$sc]=$sv2;
        $indicec[$sf][$sc]=$indiceb[$sf][$sc];
        $sv2+=20;
        echo $indiceb[$sf][$sc]." ";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h4>Matriz C</h4>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";

for ($sf=0; $sf < 3; $sf++) {
    echo "<tr>";
    for ($sc=0; $sc < 3; $sc++) {
        echo "<td>";
        echo $indicec[$sf][$sc]." ";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>