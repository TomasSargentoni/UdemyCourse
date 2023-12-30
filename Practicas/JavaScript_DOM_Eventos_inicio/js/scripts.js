// querySelector
const heading = document.querySelector(".header__texto h2"); // 0 o 1 Elementos 
heading.textContent = "Nuevo Heading";
console.log(heading);

// querySelectorAll
const enlaces = document.querySelectorAll(".navegacion a");
enlaces[0].textContent = "Nuevo texto para enlace";
enlaces[0].classList.add("nueva-clase");
//enlaces[0].classList.remove("navegacion__enlace");

// getElementById NO SE USA

const nuevoEnlace = document.createElement("A")

// agregar el href
nuevoEnlace.href = "nuevo-enlace.html";


// agregar el texto
nuevoEnlace.textContent = "Tienda Virtual";


// agregar la clase
nuevoEnlace.classList.add("navegacion__enlace")


// agregarlo al Documento

const navegacion = document.querySelector(".navegacion")

navegacion.appendChild(nuevoEnlace)

console.log(nuevoEnlace);


// eventos

//console.log(1);

//window.addEventListener("load", function() { //load espera a que el javascript y los archivos  que dependen del HTML esten listos
//    console.log(2);
//})


//window.onload = function (){
//    console.log(3);
//}

//document.addEventListener("DOMContentLoaded", function() { // Solo espera que se descargue el HTML, no espera el CSS o imagenes
//    console.log(4);
//})


//console.log(5);

//window.onscroll = function() {
//    console.log("Scrolling...")
//}

// Seleccionar elementos y asociarles un evento CON CLICK

// const btnEnviar = document.querySelector(".boton--primario");
// btnEnviar.addEventListener("click", function(evento) {

//     console.log(evento);
//     evento.preventDefault();
    

//     Validar un formulario

//     console.log("enviando formulario");


// })




// Eventos de los inputs y Textarea

const datos = {
    nombre: "",
    email: "",
    mensaje: ""
}

const nombre__input = document.querySelector("#nombre");
const email__input = document.querySelector("#email");
const mensaje__input = document.querySelector("#mensaje");
const formulario = document.querySelector(".formulario")

nombre__input.addEventListener("input", leerTexto)
email__input.addEventListener("input", leerTexto)
mensaje__input.addEventListener("input", leerTexto)

// El evento de Submit CON SUBMIT
formulario.addEventListener("submit", function(evento) {
    evento.preventDefault();
    
    // Validar formulario

    const {nombre, email, mensaje } = datos;

    if (nombre == "" || email == "" || mensaje == "") {
        mostrarAlerta("Todos los campos son obligatorios!", true)

        return; // Corta la ejecucion de el codigo
    }

    // Crear la alerta de Enviar correctamente

    mostrarAlerta("Enviando formulario...", false)
})

function leerTexto(e) {
    
    datos[e.target.id] = e.target.value

    console.log(datos)
}

function mostrarAlerta(mensaje, error) {
    const alerta = document.createElement("P");
    alerta.textContent = mensaje;


    if (error) {
        alerta.classList.add("error")
    }
    else {
        alerta.classList.add("correcto")
    }

    
    formulario.appendChild(alerta)

    // Desaparezca despues de 5 segundos
    
    setTimeout(() => {
        alerta.remove();
    }, 5000);
}



