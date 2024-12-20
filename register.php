<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="css/style3.css"> 
        <link rel="icon" href="fotos/logo_of.png" type="image/png">

    </head>
<body>
 
     <nav>
        <div class="nav-container">
            <ul class="nav-list">
                <li><button onclick="window.location.href='index.php'" class="btn-login">Menu</button></li>
            </ul>
        </div>
    </nav>

    <h2>Registro</h2>
    <form action="prosesos/procesar_registro.php" method="POST">
        <!-- Nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Correo electrónico -->
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Teléfono -->
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" required><br><br>

        <!-- Contraseña -->
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" minlength="8" required><br><br>
        

        <!-- Género -->
        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="">Seleccione una opción</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select><br><br>

        <!-- Fecha de nacimiento -->
        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <!-- Enviar -->
        <input type="submit" value="Registrar">
    </form>
    
    <footer>
    <p>&copy; 2024 Angel Esteban Cano Ortiz - Todos los derechos reservados</p>
</footer>

</body>
</html>