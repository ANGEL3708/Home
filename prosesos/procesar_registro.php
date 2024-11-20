<?php
include('C:\xampp\htdocs\Inicio\model\db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    if (!empty($nombre) && !empty($email) && !empty($telefono) && !empty($password) && !empty($genero) && !empty($fecha_nacimiento)) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tbl_usuario (nombre, email, telefono, password, genero, fecha_nacimiento) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);

        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $conexion->error);
        }

        $stmt->bind_param("ssssss", $nombre, $email, $telefono, $password_hash, $genero, $fecha_nacimiento);

        if ($stmt->execute()) {
            echo "Te registraste correctamente, regresa para iniciar sesión.";
        } else {
            echo "Error al guardar los datos: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
$conexion->close();
?>
