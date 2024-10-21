<?php
    function comprobarEdad($nombre, $edad) {
        $resultado = match(true) {
            $edad < 18 => "es menor de edad",
            $edad >= 18 and $edad <= 65 => "es mayor de edad",
            $edad > 65 => "se ha jubilado"
        };
        echo "<h1>$nombre $resultado</h1>";    
    }
?>