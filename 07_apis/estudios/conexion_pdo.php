<?php
    $_servidor = "localhost";
    $_usuario = "estudiante";
    $_contrasena = "estudiante";
    $_bd = "animes_bd";

    try {
        $_conexion = new PDO("mysql:host=$_servidor;dbname=$_bd", $_usuario, $_contrasena);
        $_conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Error de conexión: " . $e -> getMessage());
    }
?>