<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudios</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="get">
        <label>Ciudad: </label>
        <input type="text" name="ciudad">
        <input type="submit" value="Buscar">
    </form>

    <?php
    $apiUrl = "http://localhost/Ejercicios/07_apis/estudios/api_estudios.php";

    if(!empty($_GET["ciudad"])) {
        $ciudad = $_GET["ciudad"];
        $apiUrl = "$apiUrl?ciudad=$ciudad";
    }

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    curl_close($curl);

    $estudios = json_decode($respuesta, true);
    ?>
    <table>
        <thead>
            <tr>
                <th>Estudio</th>
                <th>Ciudad</th>
                <th>Año de fundación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($estudios as $estudio) { ?>
                <tr>
                    <td><?php echo $estudio["nombre_estudio"] ?></td>
                    <td><?php echo $estudio["ciudad"] ?></td>
                    <td><?php echo $estudio["anno_fundacion"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>