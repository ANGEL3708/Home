<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Aquí puedes validar los datos, por ejemplo, comparándolos con una base de datos
    if ($email === "usuario@ejemplo.com" && $password === "12345678") {
        echo "Inicio de sesión exitoso.";
    } else {
        echo "Correo o contraseña incorrectos.";
    }
}
