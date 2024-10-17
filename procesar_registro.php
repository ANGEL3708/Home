<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    if (!empty($nombre) && !empty($email) && !empty($telefono) && !empty($password) && !empty($genero) && !empty($fecha_nacimiento)) {
        echo "Formulario enviado correctamente.";

    } else {
        echo "Por favor, completa todos los campos.";
    }
}

