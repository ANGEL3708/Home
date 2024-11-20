<?php
include('C:\xampp\htdocs\Inicio\model\db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Preparar la consulta
    $stmt = $conexion->prepare("SELECT * FROM tbl_usuario WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró el usuario
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        // Verificar la contraseña
        if ($usuario['password'] === $password) {
            echo "Inicio de sesión exitoso.";
        } else {
            echo "Correo o contraseña incorrectos.";
        }
    } else {
        echo "Correo o contraseña incorrectos.";
    }

    $stmt->close();
}
?>

