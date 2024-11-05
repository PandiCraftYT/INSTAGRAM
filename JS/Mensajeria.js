//NOTA: AÑADIR COMENTARIOS PARA SABER QUE HACE CADA FUNCION

// Objeto para almacenar los mensajes de cada usuario
const chats = {};

// Función para abrir un chat con el usuario seleccionado
function openChat(username) {
    document.getElementById('default-message').classList.add('hidden');
    document.getElementById('chat-content').classList.remove('hidden');
    document.getElementById('chat-username').innerText = username;

    // Si no hay mensajes guardados, inicializa el chat para ese usuario
    if (!chats[username]) {
        chats[username] = []; // Inicializa un array de mensajes vacío para ese usuario

        // Este es un mensaje predeterminado que mostrara cuando abra el mensaje (Simplemente es de demostracion)
        const introMessage = { text: `Hola, soy ${username}`, type: 'received' };
        chats[username].push(introMessage);
    }

    // Carga los mensajes del usuario en el chat
    loadMessages(username);
}

// Función para cargar los mensajes de un usuario
function loadMessages(username) {
    const chatMessages = document.getElementById('chat-messages');
    chatMessages.innerHTML = ''; // Limpia los mensajes anteriores

    // Si hay mensajes almacenados para ese usuario, los muestra
    chats[username].forEach(message => {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', message.type);
        messageElement.innerHTML = `<p>${message.text}</p>`;
        chatMessages.appendChild(messageElement);
    });

    chatMessages.scrollTop = chatMessages.scrollHeight; // Desplaza hacia abajo
}

// Función para enviar un mensaje
function sendMessage() {
    const messageInput = document.getElementById('message-input');
    const messageText = messageInput.value.trim();
    const username = document.getElementById('chat-username').innerText;

    if (messageText === '') return;

    // Crear el nuevo mensaje y agregarlo al historial
    const newMessage = { text: messageText, type: 'sent' };
    chats[username].push(newMessage); // Esto es como un historial del usuario, el cual guarda el mensaje

    // Muestra el mensaje en el chat
    const chatMessages = document.getElementById('chat-messages');
    const messageElement = document.createElement('div');
    messageElement.classList.add('message', 'sent');
    messageElement.innerHTML = `<p>${messageText}</p>`;
    chatMessages.appendChild(messageElement);

    messageInput.value = '';
    chatMessages.scrollTop = chatMessages.scrollHeight; // Desplaza hacia abajo
}

// Enviar mensaje al presionar "Enter"
document.getElementById("message-input").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        sendMessage();
    }
});
