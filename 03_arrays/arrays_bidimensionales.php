<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays bidimensionales</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    
    ?>
</head>
<body>
    <?php
    $array = ["a" => 1,2,3,4];

    $videojuegos = [
        ["Disco Elysium", "RPG", 24.99],
        ["Dragon Ball Z Kakarot", "Acción", 59.99],
        ["Persona 3", "RPG", 24.99],
        ["Commando 2", "Estrategia", 4.99],
        ["Hollow Knight", "Metroidvania", 9.99],
        ["Stardew Valley", "Gestión de recursos", 7.99]
    ];

    $nuevo_videojuego = ["Octopath Traveler", "RPG", 24.95];
    array_push($videojuegos, $nuevo_videojuego);

    array_push($videojuegos, ["Ender Lilies", "Metroidvania", 9.95]);

    array_push($videojuegos, ["Dota 2", "MOBA", 0]);
    array_push($videojuegos, ["Fall Guys", "Plataforma", 0]);
    array_push($videojuegos, ["Rocket League", "Deporte", 0]);
    array_push($videojuegos, ["Lego Fortnite", "Acción", 0]);

    for($i = 0; $i < count($videojuegos); $i++) {
        if($videojuegos[$i][2] == 0) {
            $videojuegos[$i][3] = "GRATIS";
        } else {
            $videojuegos[$i][3] = "PAGO";
        }
    }

    //unset($videojuegos[3]);
    //unset($videojuegos[4]);
    //$videojuegos = array_values($videojuegos);

    //print_r($videojuegos);

    $_titulo = array_column($videojuegos, 0);
    //  si fuera descendente, SORT_DESC
    array_multisort($_titulo, SORT_ASC, $videojuegos);

    $_titulo = array_column($videojuegos, 0);
    $_categoria = array_column($videojuegos, 1);
    $_precio = array_column($videojuegos, 2);
    array_multisort($_categoria, SORT_ASC, 
                    $_precio, SORT_DESC, 
                    $_titulo, SORT_DESC,
                    $videojuegos);
    ?>

    <table>
        <thead>
            <tr>
                <th>Videojuego</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($videojuegos as $videojuego) {
                //echo $videojuego[0];  también podemos sacar así las columnas
                list($titulo, $categoria, $precio, $tipo) = $videojuego;
                //$titulo = $videojuego[0];
                //$categoria = $videojuego[1];
                //$precio = $videojuego[2];
                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$categoria</td>";
                echo "<td>$precio</td>";
                echo "<td>$tipo</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>