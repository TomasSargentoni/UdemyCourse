// querySelector
const heading = document.querySelector(".header__texto h2"); // 0 o 1 Elementos 
heading.textContent = "Nuevo Heading";
console.log(heading);

// querySelectorAll
const enlaces = document.querySelectorAll(".navegacion a");
enlaces[0].textContent = "Nuevo texto para enlace";
enlaces[0].classList.add("nueva-clase");
enlaces[0].classList.remove("navegacion__enlace");
console.log(enlaces[0])

// getElementById NO SE USA