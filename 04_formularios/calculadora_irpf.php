<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRPF</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );  

        require('../05_funciones/economia.php');
    ?>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="salario" placeholder="Salario">
        <input type="submit" value="Calcular salario bruto">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $tmp_salario = $_POST["salario"];

        if($tmp_salario == '') {
            echo "<p>El salario es obligatorio</p>";
        } else {
            if(filter_var($tmp_salario, FILTER_VALIDATE_FLOAT) === FALSE) {
                echo "<p>El salario debe ser un número</p>";
            } else {
                if($tmp_salario < 0) {
                    echo "<p>El salario debe ser mayor o igual que cero</p>";
                } else {
                    $salario = $tmp_salario;
                }
            }
        }

        if(isset($salario)) {
            $salario_final = calcularIRPF($salario);
            echo "<h1>El salario neto de $salario es $salario_final</h1>";    
        }
    }
    ?>
</body>
</html>