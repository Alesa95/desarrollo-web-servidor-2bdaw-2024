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

    <h3>EJERCICIO 2</h3>
    <p>MOSTRAR EN UNA LISTA LOS NÚMEROS MÚLTIPLOS DE 3 USANDO
    WHILE E IF ENTRE 1 Y 100</p>
    <ul>
    <?php
        $i = 1;
        while($i <= 100):
            if($i % 3 == 0):
                echo "<li>$i</li>";
            endif;
            $i++;
        endwhile;
    ?>
    </ul>

    <h3>EJERCICIO 3<h3>
    <p>CALCULAR LA SUMA DE LOS NÚMEROS PARES ENTRE 1 Y 20</p>
    <?php
        $i = 1;
        $suma = 0;
        while($i <= 20) {
            if($i %2 == 0) {
                $suma += $i;    # $suma = $suma + $i;
            }
            $i++;
        }
        echo "<p>SOLUCIÓN: LA SUMA ES $suma</p>";
    ?>
    
    <h3>EJERCICIO 4</h3>
    <p>CALCULAR EL FACTORIAL DE 6 CON WHILE</p>
    <?php
    //  3! = 1x2x3 = 6
    //  4! = 1x2x3x4 = 24

    $factorial = 6;
    $resultado = 1;
    $i = 1;
    while($i <= $factorial) {
        $resultado *= $i;   # $resultado = $resultado * $i
        $i++;
    }
    echo "<p>SOLUCION: EL FACTORIAL DE $factorial ES $resultado</p>";
    ?>

    <h3>EJERCICIO 5</h3>
    <p>MUESTRA POR PANTALLA LOS 50 PRIMEROS NÚMEROS PRIMOS</p>

    <?php
    /**
     * 4 % 2 = 0    4 NO ES PRIMO
     * 4 % 3 = 1
     * 
     * 5 % 2 = 1    5 SI ES PRIMO
     * 5 % 3 = 2
     * 5 % 4 = 1
     * 
     * BUCLE DE 2 A N-1
     * 
     * $n = 7
     * DESDE 2 HASTA $n-1
     *      COMPROBAR SI $n TIENE DIVISORES QUE DEN DE RESTO 0
     *          SI EXISTE ENTONCES DEVOLVER FALSO
     *          ELSE DEVOLVER TRUE
     * FIN
     */

    //  BUCLE DESDE 2 HASTA EL INFINITO Y MAS ALLA

    $numero = 2;
    $numerosPrimos = 0;

    echo "<ol>";
    while($numerosPrimos < 50) {
        $esPrimo = true;
        for($i = 2; $i <= $numero/2; $i++) {
            if($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
        }
        if($esPrimo) {
            $numerosPrimos++;
            echo "<li>$numero</li>";
        }
        $numero++;
    }
    echo "</ol>";
    ?>
</body>
</html>