const btnInicioM = document.querySelector('.opcion-inicio');
const btnBuscarM = document.querySelector('.opcion-buscar');
const btnExplorarM = document.querySelector('.opcion-explorar');
const btnReelsM = document.querySelector('.opcion-reels');
const btnMensajesM = document.querySelector('.opcion-mensajes');
const btnNotificacionesM = document.querySelector('.opcion-notificaciones');
const btnCrearM = document.querySelector('.opcion-crear');
const btnPerfilM = document.querySelector('.opcion-perfil');

btnInicioM.addEventListener('click', redireccionMenu);
btnBuscarM.addEventListener('click', redireccionBuscar);
btnExplorarM.addEventListener('click', redireccionExplorar);
btnReelsM.addEventListener('click', redireccionReels);
btnMensajesM.addEventListener('click', redireccionMensajes);
btnNotificacionesM.addEventListener('click', redireccionNotificaciones);
btnCrearM.addEventListener('click', redireccionCrear);
btnPerfilM.addEventListener('click', redireccionPerfil);

function redireccionMenu (click){
    window.location.href = "./Menu.html";
}
function redireccionBuscar (click){
    window.location.href = "../LeftMenu/Buscar.html";
}
function redireccionExplorar (click){
    window.location.href = "../LeftMenu/Explorar.html";
}
function redireccionReels (click){
    window.location.href = "../LeftMenu/Reels.html";
}
function redireccionMensajes (click){
    window.location.href = "../LeftMenu/Mensajeria.html";
}
function redireccionNotificaciones (click){
    window.location.href = "../LeftMenu/Notificaciones.html";
}
function redireccionCrear (click){
    window.location.href = "../LeftMenu/Crear.html";
}
function redireccionPerfil (click){
    window.location.href = "../LeftMenu/Perfil.html";
}