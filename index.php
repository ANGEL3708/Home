<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="fotos/logo_of.png">
        </div>
        <div class="auth-buttons">
            <a href="login.html" class="btn-login">Login</a>
            <a href="register.html" class="btn-register">Register</a>
        </div>
    </header>
    
    <section class="about-me">
        <img src="fotos/perfil.jpg" alt="Foto de perfil" class="profile-img">
        <div class="description">
            <h2>Sobre mí</h2>
            <p>
                ¡Hola! Soy un desarrollador de software junior apasionado por la tecnología y la programación.
                Me especializo en <strong>desarrollo web</strong>.
                Tengo habilidades en HTML, CSS, base de datos y PHP,
                también me dedico a reparación y mantenimiento de computadoras.
            </p>
        </div>
    </section>

    <section class="social-links">
        <h2>Contáctate conmigo</h2>
        <div class="buttons">
            <a href="https://www.instagram.com/angel_cano_ortiz/" target="_blank" class="btn">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="https://www.youtube.com/@ANGEL3708-lk3bk" target="_blank" class="btn">
                <i class="fab fa-youtube"></i> YouTube
            </a>
            <a href="https://github.com/ANGEL3708" target="_blank" class="btn">
                <i class="fab fa-github"></i> GitHub
            </a>
            <a href="https://www.linkedin.com/in/angel-cano-ortiz-undefined-66330826b/" target="_blank" class="btn">
                <i class="fab fa-linkedin"></i> LinkedIn
            </a>
        </div>
    </section>

    <section class="local-link">
        <h2>Mira mis servicios</h2>
        <div class="buttons">
            <a href="servicios.html" class="btn">
                <i class="fas fa-folder-open"></i> Mis Servicios
            </a>
        </div>
    </section>
    
    <a href="https://wa.me/573135913108?text=Hola!%20Quiero%20comunicarme%20contigo" target="_blank" class="whatsapp-button">
        <i class="fab fa-whatsapp"></i>
    </a>

    <footer>
        <p>&copy; 2024 Angel Esteban Cano Ortiz - Todos los derechos reservados</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
