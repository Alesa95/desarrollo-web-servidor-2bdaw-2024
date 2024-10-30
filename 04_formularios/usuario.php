<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );  
    ?>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Content here -->

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $tmp_usuario = $_POST["usuario"];
            $tmp_nombre = $_POST["nombre"];
            $tmp_apellidos = $_POST["apellidos"];
            $tmp_dni = $_POST["dni"];

            if($tmp_dni == '') {
                $err_dni = "El DNI es obligatorio";
            } else {
                $tmp_dni = strtoupper($tmp_dni);
                $patron = "/^[0-9]{8}[A-Z]$/";
                if(!preg_match($patron,$tmp_dni)) {
                    $err_dni = "El DNI debe tener 8 dígitos y una letra";
                } else {
                    $numero_dni = (int)substr($tmp_dni,0,8);
                    $letra_dni = substr($tmp_dni,8,1);

                    $resto_dni = $numero_dni % 23;

                    $letra_correcta = match($resto_dni) {
                        0 => "T",
                        1 => "R",
                        2 => "W",
                        3 => "A",
                        4 => "G",
                        5 => "M",
                        6 => "Y",
                        7 => "F",
                        8 => "P",
                        9 => "D",
                        10 => "X",
                        11 => "B",
                        12 => "N",
                        13 => "J",
                        14 => "Z",
                        15 => "S",
                        16 => "Q",
                        17 => "V",
                        18 => "H",
                        19 => "L",
                        20 => "C",
                        21 => "K",
                        22 => "E"
                    };

                    if($letra_dni != $letra_correcta) {
                        $err_dni = "La letra del DNI no es correcta";
                    } else {
                        $dni = $tmp_dni;
                    }
                }
            }

            if($tmp_usuario == '') {
                $err_usuario = "El usuario es obligatorio";
            } else {
                //  letras de la A a la Z (mayus o minus), numeros y barrabaja (4-12 chars)
                $patron = "/^[a-zA-Z0-9_]{4,12}$/";
                if(!preg_match($patron, $tmp_usuario)) {
                    $err_usuario = "El usuario debe contener de 4 a 12 letras, 
                        números o barrabaja";
                } else {
                    $usuario = $tmp_usuario;
                }
            }

            if($tmp_nombre == '') {
                $err_nombre = "El nombre es obligatorio";
            } else {
                if(strlen($tmp_nombre) < 2 || strlen($tmp_nombre) > 40) {
                    $err_nombre = "El nombre debe tener entre 2 y 40 caracteres";
                } else {
                    //  letras, espacios en blanco y tildes
                    $patron = "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜ]$/";
                    if(!preg_match($patron, $tmp_nombre)) {
                        $err_nombre = "El nombre solo puede contener letras y espacios
                            en blanco";
                    } else {
                        $nombre = $tmp_nombre;
                    }
                }
            }
        }
        ?>

        <h1>Formulario usuario</h1>

        <form class="col-4" action="" method="post">
            <div class="mb-3">
                <label class="form-label">DNI</label>
                <input class="form-control" type="text" name="dni">
                <?php if(isset($err_dni)) echo "<span class='error'>$err_dni</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input class="form-control" type="text" name="usuario">
                <?php if(isset($err_usuario)) echo "<span class='error'>$err_usuario</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" type="text" name="nombre">
                <?php if(isset($err_nombre)) echo "<span class='error'>$err_nombre</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input class="form-control" type="text" name="apellidos">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>