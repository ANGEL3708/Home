<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mi Portafolio</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="fotos/logo_of.png" type="image/png">



    <script type="text/javascript">

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'es'});
    }

    window.onload = function() {
        var script = document.createElement('script');
        script.src = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
        document.body.appendChild(script);

        setTimeout(function() {
            var select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = 'en';
                select.dispatchEvent(new Event('change'));
            }
        }, 500);
    };
</script>

</head>
<body>
    <header>
    <div class="logo">
    <img src="fotos/logo_of.png" alt="Logo" style="vertical-align: middle;">
    <span class="brand-name">ANGELCORP</span>
</div>

        <div class="auth-buttons">
            <a href="login.php" class="btn-login">iniciar sesion</a>
            <a href="register.php" class="btn-register">registrar</a>
        </div>
    </header>
