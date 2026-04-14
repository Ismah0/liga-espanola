// Esperamos a que el documento cargue completamente antes de ejecutar el script
document.addEventListener('DOMContentLoaded', function() {

    // 1. Obtener los elementos de las preguntas (botones)
    let pregunta1 = document.getElementById("p1");
    let pregunta2 = document.getElementById("p2");
    let pregunta3 = document.getElementById("p3");

    // 2. Obtener los elementos de las respuestas (divs ocultos)
    let respuesta1 = document.getElementById("r1");
    let respuesta2 = document.getElementById("r2");
    let respuesta3 = document.getElementById("r3");

    // 3. Función general para alternar la visibilidad (toggle)
    // Usamos classList como lo pide la rúbrica, y la clase 'hidden' de Tailwind
    function toggleAcordeon(elementoRespuesta) {
        elementoRespuesta.classList.toggle("hidden");
    }

    // 4. Asignar los eventos click a cada pregunta individualmente
    pregunta1.addEventListener("click", function() {
        toggleAcordeon(respuesta1);
    });

    pregunta2.addEventListener("click", function() {
        toggleAcordeon(respuesta2);
    });

    pregunta3.addEventListener("click", function() {
        toggleAcordeon(respuesta3);
    });

});