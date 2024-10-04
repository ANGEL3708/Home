function enviarMensaje() {
    // Obtener el nombre del cliente
    var nombreCliente = document.getElementById("nombre").value;

    // Crear el mensaje inicial
    var mensaje = "Hola, soy " + nombreCliente + ", seleccioné los siguientes servicios: \n";

    // Obtener los checkboxes seleccionados
    var servicios = document.querySelectorAll('input[type=checkbox]:checked');
    
    // Asegurarse de que el cliente haya seleccionado al menos un servicio
    if (servicios.length === 0) {
        alert("Por favor, selecciona al menos un servicio.");
        return;
    }

    servicios.forEach(function(servicio) {
        mensaje += "- " + servicio.value + "\n";
    });

    // Codificar el mensaje para URL (escapando caracteres especiales y espacios)
    var mensajeCodificado = encodeURIComponent(mensaje);

    // Número de WhatsApp colombiano
    var numeroWhatsApp = "573135913108"; // Número con código de país para Colombia

    // Crear la URL de WhatsApp
    var urlWhatsApp = "https://wa.me/" + numeroWhatsApp + "?text=" + mensajeCodificado;

    // Redirigir a la URL de WhatsApp
    window.open(urlWhatsApp, '_blank');
}
