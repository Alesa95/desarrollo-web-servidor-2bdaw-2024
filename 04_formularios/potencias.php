<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="base">Base</label>
        <input type="text" name="base" id="base" placeholder="Introduzca la base"><br><br>
        <label for="exponente">Exponente</label>
        <input type="text" name="exponente" id="exponente" placeholder="Introduzca el exponente"><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $exponente = $_POST["exponente"];
        $resultado = 1;

        for($i = 0; $i < $exponente; $i++) {
            $resultado = $resultado * $base;
            /**
             * 2 elevado a 3
             * 
             * resultado = 1x2 = 2
             * resultado = 2x2 = 4
             * resultado = 4x2 = 8
             */
        }
        echo "<h1>El resultado es $resultado</h1>";
    }
    /**
     * CREAR UN FORMULARIO QUE RECIBA DOS PARÁMETROS: BASE Y EXPONENTE
     * 
     * CUANDO SE ENVÍE EL FORMULARIO, SE CALCULARÁ EL RESULTADO DE ELEVAR
     * LA BASE AL EXPONENTE
     * 
     * EJEMPLOS:
     * 
     * 2 ELEVADO A 3 = 8 => 2x2x2 = 8
     * 3 ELEVADO A 2 = 9 => 3x3 = 9
     * 2 ELEVADO A 1 = 2
     * 3 ELEVADO A 0 = 1
     */
    ?>
</body>
</html>