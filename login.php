<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/style4.css">
    <link rel="icon" href="fotos/logo_of.png" type="image/png">

</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="prosesos/procesar_login.php" method="POST">
        <!-- Correo electrónico -->
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Contraseña -->
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <!-- Enviar -->
        <input type="submit" value="Iniciar Sesión">

        <div class="auth-buttons">
            <a href="index.php" class="btn-volver">volver</a>
        </div>
        
    </form>
</body>
</html>
