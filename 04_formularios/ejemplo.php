<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="mensaje">
        <input type="text" name="veces">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        /**
         * Este código se ejecuta cuando el servidor recibe una petición POST
         */
        $mensaje = $_POST["mensaje"];
        $veces = $_POST["veces"];
        
        for($i = 0; $i < $veces; $i++){
            echo "<h1>$mensaje</h1>";
        }

        //  añadir al formulario un campo de texto adicional para introducir un numero
        //  mostrar el mensaje tantas veces como indique el numero
    }
    ?>
</body>
</html>