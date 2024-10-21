<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperaturas</title>
</head>
<body>
    <form action="" method="post">
        <label>Temperatura original</label>
        <input type="text" name="temperatura"><br><br>
        <label>Unidad original</label>
        <select name="inicial">
            <option value="C">Celsius</option>
            <option value="K">Kelvin</option>
            <option value="F">Fahrenheit</option>
        </select><br><br>
        <label>Unidad final</label>
        <select name="final">
            <option value="C">Celsius</option>
            <option value="K">Kelvin</option>
            <option value="F">Fahrenheit</option>
        </select>
        <br><br>
        <input type="submit" value="Convertir">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperatura = $_POST["temperatura"];
        $inicial = $_POST["inicial"];
        $final = $_POST["final"];

        $temperatura_final = $temperatura;

        if($inicial == "C") {
            if($final == "K") {
                $temperatura_final = $temperatura + 273.15;
            } elseif($final == "F") {
                $temperatura_final = ($temperatura * (9/5)) + 32;
            }
        } elseif($inicial == "K") {
            if($final == "C") {

            } elseif($final == "F") {

            }
        } elseif($inicial == "F") {
            if($final == "C") {
                
            } elseif($final == "K") {

            }
        }
        echo "<p>$temperatura_final</p>";
    }
    ?>
</body>
</html>