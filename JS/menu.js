//primero se convierte la clase a una constante llamada btnInicioM, lo que esta entre parentesis es el nombre de la clase que esta en html .opcion-inicio
//por lo cual cuando se haga click en esa opcion ocurrira lo siguiente
const btnInicioM = document.querySelector('.opcion-inicio');
const btnBuscarM = document.querySelector('.opcion-buscar')


//despues con el nombre de la constente que hace referencia a la clase de html llamada .opcion-inicio mandara llamar una funcion del evento click
btnInicioM.addEventListener('click', redirrecionMenu);
//...aqui pondras el nombre de la constante y pones .addEventListener('click,clickeo')

btnBuscarM.addEventListener('click', redirrecionBuscar);


//aqui esta el funcionamiento de la funcion, aqui mismo puedes poner las rutas de los demas enlaces
//esta sola funcion servira para todas las constantes/clases que ocupes redireccionar
function redirrecionMenu (click){
    window.location.href = "./Menu.html";
}
function redirrecionBuscar (click){
    window.location.href = "../Buscar.html";
}