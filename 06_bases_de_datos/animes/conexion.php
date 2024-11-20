<?php
    $_servidor = "127.0.0.1"; //  "localhost"
    $_usuario = "estudiante";
    $_contrasena = "estudiante";
    $_base_de_datos = "animes_bd";

    //  Mysqli ó PDO

    $_conexion = new Mysqli($_servidor,$_usuario,$_contrasena,$_base_de_datos)
        or die("Error de conexión");
?>