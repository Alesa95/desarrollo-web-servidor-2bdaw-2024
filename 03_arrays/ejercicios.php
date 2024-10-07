<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    
    ?>
</head>
<body>
    <!-- RECORDATORIO!!! EL VIERNES VEMOS CÓMO ORDENAR TABLAS -->

    <!--    EJERCICIO 1
                
            Desarrollo web en entorno servidor => Alejandra
            Desarrollo web en entorno cliente => José Miguel
            Diseño de interfaces web => José Miguel
            Despliegue de aplicaciones => Jaime
            Empresa e iniciativa emprendedora => Andrea
            Inglés => Virginia

            MOSTRARLO TODO EN UNA TABLA
    -->

    <?php
    $asignaturas = [
        "Desarrollo web en entorno servidor" => "Alejandra",
        "Desarrollo web en entorno cliente" => "José Miguel",
        "Diseño de interfaces web" => "José Miguel",
        "Despliegue de aplicaciones" => "Jaime",
        "Empresa e iniciativa emprendedora" => "Andrea",
        "Inglés" => "Virginia"
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            krsort($asignaturas);
            foreach($asignaturas as $asignatura => $profesor) {
                echo "<tr>";
                echo "<td>$asignatura</td>";
                echo "<td>$profesor</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!--    EJERCICIO 2
            
            Francisco => 3
            Daniel => 5
            Aurora => 10
            Luis => 7
            Samuel => 9

            MOSTRAR EN UNA TABLA CON 3 COLUMNAS
            - COLUMNA 1: ALUMNO
            - COLUMNA 2: NOTA
            - COLUMNA 3: SI NOTA < 5, SUSPENSO, ELSE, APROBADO
    -->

    <?php
    $estudiantes = [
        "Francisco" => 3,
        "Daniel" => 5,
        "Aurora" => 10,
        "Ismael" => 0,
        "Luis" => 7,
        "Samuel" => 9,
        "Juanjo" => 2,
        "Vicente" => 1,
    ];
    ?>

    <br><br><br>
    <table>
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
                <th>Calificación</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //if($nota < 5) echo "<tr class='suspenso'>";
                //else echo "<tr class='aprobado'>";
            foreach($estudiantes as $estudiante => $nota) { ?>
                <tr class="<?php if($nota < 5) echo "suspenso"; else echo "aprobado"; ?>">
                    <td><?php echo $estudiante ?></td>
                    <td><?php echo $nota ?></td>
                    <td>
                        <?php
                        if($nota < 5) echo "Suspenso";
                        else echo "Aprobado";
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br><br>
    <?php
    /**
     * Insertar dos nuevos estudiantes, con notas aleatorias entre 0 y 10
     * 
     * Borrar un estudiante (el que peor os caiga) por la clave
     * 
     * Mostrar en una nueva tabla todo ordenado por los nombres en orden alfabeticamente
     * inverso
     * 
     * Mostrar en una nueva tabla todo ordenado por la nota de 10 a 0 (orden inverso)
     */

    $estudiantes["Paula"] = rand(0,10);
    $estudiantes["Waluis"] = rand(0,10);

    unset($estudiantes["Vicente"]);

    krsort($estudiantes);
    ?>

    <table>
        <caption>Estudiantes ordenados por el nombre al revés</caption>
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($estudiantes as $estudiante => $nota) { ?>
                <tr class="<?php if($nota < 5) echo "suspenso"; else echo "aprobado"; ?>">
                    <td><?php echo $estudiante ?></td>
                    <td><?php echo $nota ?></td>
                    <td>
                        <?php
                        if($nota < 5) echo "Suspenso";
                        else echo "Aprobado";
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <br><br><br>

    <table>
        <caption>Estudiantes ordenados de menor a mayor nota</caption>
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            arsort($estudiantes);
            foreach($estudiantes as $estudiante => $nota) { ?>
                <tr class="<?php if($nota < 5) echo "suspenso"; else echo "aprobado"; ?>">
                    <td><?php echo $estudiante ?></td>
                    <td><?php echo $nota ?></td>
                    <td>
                        <?php
                        if($nota < 5) echo "Suspenso";
                        else echo "Aprobado";
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>