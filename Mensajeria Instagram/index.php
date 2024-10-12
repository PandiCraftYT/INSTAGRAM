<!-- NOTA MENTAL: PROGRAMAR EN INGLES -->
 
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mensajeria </title>
    <link rel="stylesheet" href="mensajeria.css"> <!-- Conexion al archivo .css -->
</head>

<body>
    <div class="container"> <!-- Contenedor que se utilizara para la barra lateral y para la ventana del chat -->
        <div class="sidebar"> <!-- Esta clase sera de la lista de usuarios y la informacion de perfil en la barra lateral -->
            <div class="user-info"> <!-- Seccion del usuario (Nuestro perfil) -->
                <img src="Colocar la imagen del perfil" alt="Perfil" class="profile-pic">
                <p class="username">angelv_</p>
            </div>
            <div class="messages"> <!-- Contenedor utilizado para los mensajes -->
                <h3>Mensajes</h3>
                <ul> <!-- Usuarios con los que se a conversado -->
                    <!-- NOTA: La funcion onclick me permite acceder a cada chat del listado haciendo click en ellos, en este caso cada elemento es un usuario que portara un enlace, el cual me lleva a chat.php -->
                    <li onclick="openChat('chat.php?user=Manuel')"> 
                        <img src="Imagen del perfil de lista de amigos" alt="User">
                        <div class="message-preview">
                            <p class="name">Manuel</p>
                            <p class="time">Última actividad hace 6 minutos</p>
                        </div>
                    </li>
                    <li onclick="openChat('chat.php?user=Angela')">
                        <img src="imagel del perfil de lista de amigos" alt="User">
                        <div class="message-preview">
                            <p class="name">Angela</p>
                            <p class="time">Última actividad hace 2 semanas</p>
                        </div>
                    </li>
                    <li onclick="openChat('chat.php?user=Jose')">
                        <img src="imagel del perfil de lista de amigos" alt="User">
                        <div class="message-preview">
                            <p class="name">Jose</p>
                            <p class="time">Última actividad hace 1 semanas</p>
                        </div>
                    </li>
                    <li onclick="openChat('chat.php?user=Maria')">
                        <img src="imagel del perfil de lista de amigos" alt="User">
                        <div class="message-preview">
                            <p class="name">Maria</p>
                            <p class="time">Última actividad hace 15 minutos</p>
                        </div>
                    </li>
                    <li onclick="openChat('chat.php?user=Luis')">
                        <img src="imagel del perfil de lista de amigos" alt="User">
                        <div class="message-preview">
                            <p class="name">Luis</p>
                            <p class="time">Última actividad hace 1 Hora</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="chat-window"> <!-- Esta clase tendra la ventana de chat, que estara activa de manera inicial -->
            <p class="empty-message">Selecciona un chat para empezar a conversar.</p> <!-- Cuando no hay chat seleccionado mostraremos un mensaje que se encuentre vacio -->
        </div>
    </div>
    <script src="script.js"></script> <!-- Conexiona JavaScript para manejar las funciones de redireccion del usuario a las ventanas de chat -->
</body>
</html>
