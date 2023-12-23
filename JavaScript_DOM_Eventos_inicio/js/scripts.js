// querySelector
const heading = document.querySelector(".header__texto h2"); // 0 o 1 Elementos 
heading.textContent = "Nuevo Heading";
console.log(heading);

// querySelectorAll
const enlaces = document.querySelectorAll(".navegacion a");
enlaces[0].textContent = "Nuevo texto para enlace";
enlaces[0].classList.add("nueva-clase");
// enlaces[0].classList.remove("navegacion__enlace");

// getElementById NO SE USA
const nuevoEnlace = document.createElement("A")

// agregar el href
nuevoEnlace.href = "nuevo-enlace.html";


// agregar el texto
nuevoEnlace.textContent = "Un nuevo Enlace";


// agregar la clase
nuevoEnlace.classList.add("navegacion__enlace")


// agregarlo al Documento

const navegacion = document.querySelector(".navegacion")
navegacion.appendChild(nuevoEnlace)

console.log(nuevoEnlace);
