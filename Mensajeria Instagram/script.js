// Función que redirige al usuario a la página del chat cuando se hace clic en un contacto
function openChat(url) {
    window.location.href = url; 
    // Redirige a la URL del chat del usuario seleccionado
}

// Esta funcion, se encargara de que cuando presionemos la tecla de "Enter" se envie el mensaje en lugar de tener un boton (aun no esta implementado el chat dinamico)
document.getElementById('messageInput').addEventListener('keypress', function (event) {
    if (event.key === 'Enter') { 
        const message = this.value;
        // NOTA PERSONAL DE COMO FUNCIONA el siguiente if: el siguiente if se encarga de que el mensaje no este vacio, el sendmessage llama a la funcion para enviar el mensaje y this.value nos limpia el campo de entrada despues de enviar el mensaje
        if (message.trim() !== '') { 
            sendMessage(message);
            this.value = ''; 
        }
    }
});

// Función para enviar el mensaje (podemos implementar la lógica aquí)
function sendMessage(message) {
    console.log("Mensaje enviado:", message); // esto lo podemos reemplazar con la lógica para enviar el mensaje al backend
}