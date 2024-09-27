<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <!--
        EJERCICIO 1: MOSTRAR LA FECHA ACTUAL CON EL SIGUIENTE FORMATO:
            Viernes 27 de Septiembre de 2024
            Lunes 2 de Septiembre de 2024
        UTILIZAR LAS ESTRUCTURAS DE CONTROL NECESARIAS
    -->

    <?php
    $dia = date("l");
    $dia = match($dia) {
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miércoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sábado",
        "Sunday" => "Domingo"
    };

    $mes = date("n");
    $mes = match($mes) {
        "1" => "Enero",
        "2" => "Febrero",
        "3" => "Marzo",
        "4" => "Abril",
        "5" => "Mayo",
        "6" => "Junio",
        "7" => "Julio",
        "8" => "Agosto",
        "9" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    };

    $dia_n = date("j");
    $anno = date("Y");

    echo "<h3>$dia $dia_n de $mes de $anno</h3>";
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