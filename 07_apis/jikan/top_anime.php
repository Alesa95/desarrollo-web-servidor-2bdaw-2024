<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Anime</title>
</head>
<body>
    <?php
        $apiUrl = "https://api.jikan.moe/v4/top/anime";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        curl_close($curl);

        $datos = json_decode($respuesta, true);
        $animes = $datos["data"];
        //print_r($animes);
    ?>

    <table>
        <thead>
            <tr>
                <th>Posición</th>
                <th>Título</th>
                <th>Nota</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($animes as $anime) { ?>
                <tr>
                    <td><?php echo $anime["rank"] ?></td>
                    <td><?php echo $anime["title"] ?></td>
                    <td><?php echo $anime["score"] ?></td>
                    <td>
                        
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>