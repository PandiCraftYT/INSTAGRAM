<!-- Nota mental: Programar en ingles -->
<?php
// Nota: La siguiente funcion obtendra el nombre de usuario de la url si se encuentra disponible, y si no, usara 'Usuario' como el valor predeterminado -->
$user = isset($_GET['user']) ? $_GET['user'] : 'Usuario';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat con <?php echo $user; ?></title> <!-- Nota: Ejemplo de la funcion anterior, que en este caso nos obtendra el nombre del usuario con el que se esta chateando -->
    <link rel="stylesheet" href="mensajeria.css"> <!-- La conexion al archivo .css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Este link sirve para traer desde los servidores los iconos que utilizaremos en la parte de la barra del chat (El telofono, camara, signo de exclamacion)-->

</head>
<body>
    <div class="container"> <!-- Contenedor que tendra la barra lateral y las ventanas de chat -->
        <div class="sidebar">
            <div class="user-info"> <!-- Clase con la informacion de nuestro perfil y la lista de usuarios -->
                <img src="Colocar Imagen del perfil" alt="Perfil" class="profile-pic">
                <p class="username">angelv_</p>
            </div>
            <div class="messages"> <!-- Clase que tendra los mensajes de los usuarios con los que hemos conversado -->
                <h3>Mensajes</h3>
                <ul>
                    <!-- La lista de usuarios que vamos a utilizar SERA LA MISMA QUE SE ENCUENTRA EN index.php -->
                    <li onclick="openChat('chat.php?user=Manuel')">
                        <img src="Imagen del contacto" alt="User">
                        <div class="message-preview">
                            <p class="name">Manuel</p>
                            <p class="time">Última actividad hace 6 minutos</p>
                        </div>
                    </li>
                    <li onclick="openChat('chat.php?user=Angela')">
                        <img src="Imagen del contacto" alt="User">
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

        <div class="chat-window"> <!-- Clase que tendra el chat que se selecciono -->
            <div class="chat-header">
                <img src="Imagen del perfil" alt="Perfil" class="profile-pic">
                <p class="chat-username"><?php echo $user; ?></p> <!-- Nos mostrara el nombre del usuario con el que estemos chateando -->
                <div class="chat-icons"> <!-- Clase que utilizaremos para los iconos que se muestran en la barra del perfil dentro del chat-->
                    <i class="fas fa-phone"></i>
                    <i class="fas fa-video"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
            </div>
            <div class="chat-content"> <!-- Clase con el contenido del chat -->
                <div class="message received">
                    <p>Hola, ¿cómo estás?</p>
                </div>
                <div class="message sent">
                    <p>Bien, ¿y tú?</p>
                </div>
            </div>
            <div class="chat-input chat-footer">  <!-- Area del campo de texto y los iconos que contiene dicha area -->
                <div class="message-area">
                     <i class="fas fa-smile"></i> 
                     <input type="text" placeholder="Escribe un mensaje..." class="message-input">
                    <div class="chat-icons"> <!-- Esta clase la utilizaremos para los iconos de la derecha -->
                        <i class="fas fa-image"></i>
                        <i class="fas fa-microphone"></i>
                        <i class="fas fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script> <!-- Conecta el archivo JavaScript para manejar la interactividad -->
</body>
</html>
