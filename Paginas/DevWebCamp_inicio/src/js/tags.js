(function () {
    const tagsInput = document.querySelector("#tags_input");

    if(tagsInput) {
        
        // Escuchar los cambios en el input
        tagsInput.addEventListener("keypress", guardarTag)

        function guardarTag() {
            console.log("Escribiendo...");
        }
    }
})() // IIFE
