<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
    <?php
        $array1 = [];

        $array11 = [];
        $array12 = [];
        for($i = 0; $i < 5; $i++) {
            $array11[$i] = rand(1,10);
            $array12[$i] = rand(10,100);
        }

        array_push($array1,$array11);
        array_push($array1,$array12);

        echo "<p>";
        for($i = 0; $i < 5; $i++) {
            echo $array11[$i] . ", ";
        }
        echo "</p>";

        echo "<p>";
        for($i = 0; $i < 5; $i++) {
            echo $array12[$i] . ", ";
        }
        echo "</p>";

        //  Máximo
        $maximo1 = $array11[0];
        for($i = 1; $i < 5; $i++) {
            if($array11[$i] > $maximo1) {
                $maximo1 = $array11[$i];
            }
        }
        echo "<p>Máximo del array1: $maximo1</p>";

        //  Mínimo
        $minimo1 = $array11[0];
        for($i = 1; $i < 5; $i++) {
            if($array11[$i] < $minimo1) {
                $minimo1 = $array11[$i];
            }
        }
        echo "<p>Mínimo del array1: $minimo1</p>";

        //  Media
        $suma = 0;
        for($i = 1; $i < 5; $i++) {
            $suma += $array11[$i];
        }
        $media = $suma / count($array11);
        echo "<p>Media del array1 $media</p>";

    ?>
</body>
</html>