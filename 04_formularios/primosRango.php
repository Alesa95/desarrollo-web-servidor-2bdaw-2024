<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>Desde</label>
    <input type="text" name="desde"><br><br>
    <label>Hasta</label>
    <input type="text" name="hasta"><br><br>
    <input type="submit" value="Calcular primos">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $desde = $_POST["desde"];
        $hasta = $_POST["hasta"];

        echo "<ul>";
        for($i = $desde; $i <= $hasta; $i++) {
            $esPrimo = true;
            for($j = 2; $j <= $i/2; $j++) {
                if($i % $j == 0) {
                    $esPrimo = false;
                    break;
                }
            }
            if($esPrimo) {
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>