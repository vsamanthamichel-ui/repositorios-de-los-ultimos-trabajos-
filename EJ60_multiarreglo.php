<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MultiOperaciones</title>
</head>
<body>

    <h2>MULTIOPERACIONES</h2>

    <!-- Formulario de captura -->
    <form method="POST" action="">

    <?php
    // Ciclo para mostrar tres renglones de captura
    for ($i = 0; $i < 3; $i++) {
        echo "Numeros1:";
        echo "<input type='number' name='numeros1[]'>" . " ";

        echo "Numeros2:";
        echo "<input type='number' name='numeros2[]'>" . " ";
        echo "<br><br>";
    }
    ?>

    <!-- Botón para guardar y calcular -->
    <button type="submit" name="guardar" value="guardar">
    Guardar y calcular </button>

    <?php
    // Verificar si se presionó el botón Guardar
    if (isset($_POST['guardar'])) {

        // Guardar los datos en dos arreglos
        $numeros1 = $_POST['numeros1'];
        $numeros2 = $_POST['numeros2'];

        // Declarar los arreglos de resultados
        $suma = array();
        $resta = array();
        $multiplicacion = array();
        $division = array();
        $residuo = array();

        // Ciclo para realizar los cálculos
        for ($i = 0; $i < 3; $i++) {

            // Condición: Numeros1 del 51 al 99
            if ($numeros1[$i] < 51 || $numeros1[$i] > 99) {
                echo "Error: Numeros1 solo acepta del 51 al 99 <br>";
            }

            // Condición: Numeros2 del -50 al -1
            if ($numeros2[$i] < -50 || $numeros2[$i] > -1) {
                echo "Error: Numeros2 solo acepta del -50 al -1 <br>";
            }

            // Calcular suma
            $suma[$i] = $numeros1[$i] + $numeros2[$i];

            // Calcular resta
            $resta[$i] = $numeros1[$i] - $numeros2[$i];

            // Calcular multiplicación
            $multiplicacion[$i] = $numeros1[$i] * $numeros2[$i];

            // Calcular división
            $division[$i] = $numeros1[$i] / $numeros2[$i];

            // Calcular residuo
            $residuo[$i] = $numeros1[$i] % $numeros2[$i];

        }

        // Imprimir el arreglo de Numeros1
        echo "<h3>ARREGLO DE NUMEROS1</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $numeros1[$i] . "<br>";
        }

        // Imprimir el arreglo de Numeros2
        echo "<h3>ARREGLO DE NUMEROS2</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $numeros2[$i] . "<br>";
        }

        // Imprimir el arreglo de Suma
        echo "<h3>ARREGLO DE SUMA</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $suma[$i] . "<br>";
        }

        // Imprimir el arreglo de Resta
        echo "<h3>ARREGLO DE RESTA</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $resta[$i] . "<br>";
        }

        // Imprimir el arreglo de Multiplicación
        echo "<h3>ARREGLO DE MULTIPLICACION</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $multiplicacion[$i] . "<br>";
        }

        // Imprimir el arreglo de División
        echo "<h3>ARREGLO DE DIVISION</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $division[$i] . "<br>";
        }

        // Imprimir el arreglo de Residuo
        echo "<h3>ARREGLO DE RESIDUO</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $residuo[$i] . "<br>";
        }

    }

    ?>

</body>
</html>