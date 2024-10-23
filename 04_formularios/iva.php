<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    

        require('../05_funciones/economia.php');
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio">
        <br><br>
        <select name="iva">
            <option value="general">General</option>
            <option value="reducido">Reducido</option>
            <option value="superreducido">Superreducido</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $tmp_precio = $_POST["precio"];
        $tmp_iva = $_POST["iva"];

        if($tmp_precio == '') {
            echo "<p>El precio es obligatorio</p>";
        } else {
            if(filter_var($tmp_precio, FILTER_VALIDATE_FLOAT) === FALSE) {
                echo "<p>El precio debe ser un número</p>";
            } else {
                if($tmp_precio < 0) {
                    echo "<p>El precio debe ser mayor o igual que cero</p>";
                } else {
                    $precio = $tmp_precio;
                }
            }
        }

        if($tmp_iva == '') {
            echo "<p>El IVA es obligatorio</p>";
        } else {
            $valores_validos_iva = ["general", "reducido", "superreducido"];
            if(!in_array($tmp_iva, $valores_validos_iva)) {
                echo "<p>El IVA solo puede ser: general, reducido, superreducido</p>";
            } else {
                $iva = $tmp_iva;
            }
        }

        if(isset($precio) && isset($iva)) {
            echo calcularPVP($precio, $iva);
        }

    }
    ?>
</body>
</html>