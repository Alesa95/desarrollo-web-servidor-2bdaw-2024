<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    
    ?>
</head>
<body>
    <?php
        $id = $_GET["id"];
        $apiUrl = "https://api.jikan.moe/v4/anime/$id/full";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        curl_close($curl);

        $datos = json_decode($respuesta, true);
        $anime = $datos["data"];
    ?>
    <h1>
        <?php echo $anime["title"] ?>
    </h1>
    <h2>
        <?php echo $anime["score"] ?>
    </h2>
    <img width="200px" src="<?php echo $anime["images"]["jpg"]["image_url"] ?>">

    <h3>Sinopsis</h3>
    <p>
        <?php echo $anime["synopsis"] ?>
    </p>

    <h3>Géneros</h3>
    <ul>
        <?php
        $generos = $anime["genres"];
        foreach($generos as $genero) { ?>
            <li><?php echo $genero["name"] ?></li>
        <?php } ?>
    </ul>

    <iframe src="<?php echo $anime["trailer"]["embed_url"] ?>"></iframe>

    <h3>Animes relacionados</h3>
    <ul>
        <?php
        $relacionados = $anime["relations"];
        foreach($relacionados as $relacionado) {
            $entradas = $relacionado["entry"];
            foreach($entradas as $entrada) {
                if($entrada["type"] == "anime") {
                    echo "<li>" . $entrada["name"] . "</li>";
                }
            }
        }
        ?>
    </ul>
</body>
</html>