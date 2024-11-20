<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index de Animes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    

        require('conexion.php');
    ?>
</head>
<body>
    <div class="container">
        <h1>Tabla de animes</h1>
        <?php
            $sql = "SELECT * FROM animes";
            $resultado = $_conexion -> query($sql);
            /**
             * Aplicamos la función query a la conexión, donde se ejecuta la sentencia SQL hecha
             * 
             * El resultado se almacena $resultado, que es un objeto con una estructura parecida
             * a los arrays
             */
        ?>
        <a class="btn btn-secondary" href="nuevo_anime.php">Crear nuevo anime</a><br><br>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Estudio</th>
                    <th>Año</th>
                    <th>Número de temporadas</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($fila = $resultado -> fetch_assoc()) {    // trata el resultado como un array asociativo
                        echo "<tr>";
                        echo "<td>" . $fila["titulo"] . "</td>";
                        echo "<td>" . $fila["nombre_estudio"] . "</td>";
                        echo "<td>" . $fila["anno_estreno"] . "</td>";
                        echo "<td>" . $fila["num_temporadas"] . "</td>"; 
                        ?>
                        <td>
                            <img width="100" height="200" src="<?php echo $fila["imagen"] ?>">
                        </td>
                        <?php
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>