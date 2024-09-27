<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
</head>
<body>
    <h1>Lista con WHILE<h1>
    <?php
    $i = 1;

    echo "<ul>";
    while($i <= 10) {
        echo "<li>$i</li>";
        $i++;
    }
    echo "</ul>";
    ?>

    <h1>Lista con WHILE alternativa</h1>
    <?php
    $i = 1;

    echo "<ul>";
    while($i <= 10):
        echo "<li>$i</li>";
        $i++;
    endwhile;
    echo "</ul>";
    ?>

    <!--
        EJERCICIO 2: MOSTRAR EN UNA LISTA LOS NÚMEROS MÚLTIPLOS DE 3 USANDO
        WHILE E IF

        EJERCICIO 3: CALCULAR LA SUMA DE LOS NÚMEROS PARES ENTRE 1 Y 20

        EJERCICIO 4: CALCULAR EL FACTORIAL DE 6 CON WHILE

        HACER EN EL ARCHIVO EJERCICIOS.PHP
    -->
</body>
</html>