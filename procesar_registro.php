<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    // Validaciones adicionales si es necesario
    if (!empty($nombre) && !empty($email) && !empty($telefono) && !empty($password) && !empty($genero) && !empty($fecha_nacimiento)) {
        echo "Formulario enviado correctamente.";
        // Aquí puedes realizar operaciones adicionales como guardar en una base de datos.
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

