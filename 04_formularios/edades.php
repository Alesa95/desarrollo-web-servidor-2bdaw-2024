<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        CREAR UN FORMULARIO QUE RECIBA EL NOMBRE Y LA EDAD DE UNA PERSONA

        SI LA EDAD ES MENOR QUE 18, SE MOSTRARÁ EL NOMBRE Y QUE ES MENOR DE EDAD

        SI LA EDAD ESTÁ ENTRE 18 Y 65, SE MOSTRARÁ EL NOMBRE Y QUE ES MAYOR DE EDAD

        SI LA EDAD ES MAS DE 65, SE MOSTRARÁ EL NOMBRE Y QUE SE HA JUBILADO
    -->

    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];

        $resultado = match(true) {
            $edad < 18 => "es menor de edad",
            $edad >= 18 and $edad <= 65 => "es mayor de edad",
            $edad > 65 => "se ha jubilado"
        };
        echo "<h1>$nombre $resultado</h1>";
    }
    ?>
</body>
</html>