<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de 3</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="numero1"><br><br>
        <input type="text" name="numero2"><br><br>
        <input type="text" name="numero3"><br><br>
        <input type="submit" value="Sacar máximo">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];

        $max = $numero1;

        if($numero2 > $max) {
            $max = $numero2;
        }

        if($numero3 > $max) {
            $max = $numero3;
        }

        echo "<p>El máximo es $max</p>";
    }
    ?>
</body>
</html>