<div class="container">
        <h1>Servicios Disponibles</h1>

        <form id="form-servicios">
            <h3>Equipos y Componentes</h3>
            <div class="servicio">
                <img src="fotos/pc.webp" alt="Venta">
                <label><input type="checkbox" value="Venta de equipos de segunda mano"> Venta de equipos de segunda mano</label>
            </div>
            <div class="servicio">
                <img src="fotos/erramienta.jpg" alt="Servicio técnico">
                <label><input type="checkbox" value="Servicio técnico"> Servicio técnico</label>
            </div>
            <div class="servicio">
                <img src="fotos/mantenimiento.png" alt="Limpieza y mantenimiento">
                <label><input type="checkbox" value="Limpieza y mantenimiento"> Limpieza y mantenimiento</label>
            </div>
            <div class="servicio">
                <img src="fotos/pieza.png" alt="Venta de piezas">
                <label><input type="checkbox" value="Venta de piezas"> Venta de piezas</label>
            </div>
            <div class="servicio">
                <img src="fotos/disco.png" alt="Instalación de RAM y discos">
                <label><input type="checkbox" value="Instalación de memoria RAM y discos duros"> Instalación de memoria RAM y discos duros</label>
            </div>
            <div class="servicio">
                <img src="fotos/window-10.webp" alt="Instalación de sistemas operativos">
                <label><input type="checkbox" value="Instalación de sistemas operativos y Office"> Instalación de sistemas operativos y Office</label>
            </div>
            <div class="servicio">
                <img src="fotos/rayo.png" alt="Optimización de computadoras">
                <label><input type="checkbox" value="Optimización de computadoras para mejor rendimiento"> Optimización de computadoras para mejor rendimiento</label>
            </div>
            <div class="servicio">
                <img src="fotos/red.webp" alt="Instalación de cables de internet">
                <label><input type="checkbox" value="Instalación de cables de internet para mayor velocidad"> Instalación de cables de internet para mayor velocidad</label>
            </div>
            <div class="servicio">
                <img src="fotos/programas.png" alt="Instalación de programas">
                <label><input type="checkbox" value="Instalación de programas"> Instalación de programas</label>
            </div>

            <h3>Mantenimiento de Consolas</h3>
            <div class="servicio">
                <img src="fotos/xbox.png" alt="Xbox 360">
                <label><input type="checkbox" value="Mantenimiento de Xbox 360"> Mantenimiento de Xbox 360</label>
            </div>
            <div class="servicio">
                <img src="fotos/xbox-one.svg" alt="Xbox One">
                <label><input type="checkbox" value="Mantenimiento de Xbox One"> Mantenimiento de Xbox One</label>
            </div>
            <div class="servicio">
                <img src="fotos/PlayStation_3.svg" alt="PlayStation 3">
                <label><input type="checkbox" value="Mantenimiento de PlayStation 3"> Mantenimiento de PlayStation 3</label>
            </div>
            <div class="servicio">
                <img src="fotos/ps4.png" alt="PlayStation 4">
                <label><input type="checkbox" value="Mantenimiento de PlayStation 4"> Mantenimiento de PlayStation 4</label>
            </div>

            <h3>Información del Cliente.</h3>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required><br><br>

         
<button type="button" onclick="enviarMensaje()" class="enviar-whatsapp-button" data-tooltip="recomendado tener WhatsApp abierto si estas en computadora.">
    Enviar a WhatsApp
</button>

        </form>
    </div>

    <a href="https://wa.me/573135913108?text=Hola!%20Quiero%20comunicarme%20contigo" target="_blank" class="whatsapp-button">
        <i class="fab fa-whatsapp"></i>
    </a>
    
    <script src="js/script.js"></script>