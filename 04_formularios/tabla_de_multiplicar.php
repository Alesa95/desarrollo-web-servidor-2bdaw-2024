<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    
    ?>
</head>
<body>
    <!--
        CREAR UN FORMULARIO QUE RECIBA UN NÚMERO
        
        SE MOSTRARÁ LA TABLA DE MULTIPLICAR DE ESE NUMERO EN UNA TABLA HTML

        2 x 1 = 2
        2 x 2 = 4
        ...
    -->

    <form action="" method="post">
        <label for="numero">Número</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Calcular">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST["numero"];

        for($i = 1; $i <= 10; $i++) {
            echo "<p>$numero x $i = " . $numero*$i . "</p>";
        }
    }
    ?>
</body>
</html>