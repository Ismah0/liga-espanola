document.addEventListener('DOMContentLoaded', function() {

    // 1. Enlace a componentes mediante ById
    let seccionPrincipal = document.getElementById('seccion-animada');

    // 2. Enlace a divisiones mediante ClassName
    let elementosGirar = document.getElementsByClassName('efecto-girar');
    let elementosFlotar = document.getElementsByClassName('efecto-flotar'); // ¡NUEVO EFECTO!
    let elementosDeslizar = document.getElementsByClassName('efecto-deslizar');

    // ==========================================
    // EFECTO 1: Girar y Sombra 
    // ==========================================
    function girarEntrada(evento) {
        let el = evento.currentTarget;
        el.style.transition = "transform 0.5s ease-in-out"; 
        el.style.transform = "rotate(3deg) scale(1.02)"; 
        
        el.classList.remove('border-0');
        el.classList.add('border', 'border-warning', 'shadow-lg');
    }
    function girarSalida(evento) {
        let el = evento.currentTarget;
        el.style.transform = "rotate(0deg) scale(1)";
        el.classList.remove('border', 'border-warning', 'shadow-lg');
        el.classList.add('border-0');
    }

    // ==========================================
    // EFECTO 2: Flotar e Iluminar (El nuevo y bonito)
    // ==========================================
    function flotarEntrada(evento) {
        let el = evento.currentTarget;
        // Esta transición tiene una curva matemática para hacer un suave "rebote" al final
        el.style.transition = "all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275)"; 
        el.style.transform = "translateY(-10px)"; // Flota 10 pixeles hacia arriba
        
        // Iluminamos con un borde azul claro (info) y sombra grande
        el.classList.remove('border-0', 'shadow-sm');
        el.classList.add('border', 'border-info', 'border-3', 'shadow-lg'); 
    }
    function flotarSalida(evento) {
        let el = evento.currentTarget;
        el.style.transform = "translateY(0px)"; // Regresa a su posición original
        
        el.classList.remove('border', 'border-info', 'border-3', 'shadow-lg');
        el.classList.add('border-0', 'shadow-sm');
    }

    // ==========================================
    // EFECTO 3: Deslizar a la derecha 
    // ==========================================
function deslizarEntrada(evento) {
        let el = evento.currentTarget;
        el.style.transition = "transform 0.3s ease";
        el.style.transform = "translateX(15px)"; 
        
        // Quitamos el texto oscuro y le ponemos texto AZUL (primary)
        el.classList.remove('text-dark', 'text-black');
        el.classList.add('text-primary', 'border-primary', 'font-bold'); // Le agregué font-bold para que resalte más
    }
    function deslizarSalida(evento) {
        let el = evento.currentTarget;
        el.style.transform = "translateX(0px)";
        
        // Le quitamos el azul y lo regresamos a oscuro
        el.classList.remove('text-primary', 'border-primary', 'font-bold');
        el.classList.add('text-dark');
    }

    // ==========================================
    // 3. Asignación de Eventos (addEventListener)
    // ==========================================
    if (seccionPrincipal) {
        seccionPrincipal.addEventListener('mouseover', function() {
            seccionPrincipal.style.opacity = "0.95"; // Lo hice más sutil también
        });
        seccionPrincipal.addEventListener('mouseout', function() {
            seccionPrincipal.style.opacity = "1";
        });
    }

    for (let i = 0; i < elementosGirar.length; i++) {
        elementosGirar[i].addEventListener('mouseover', girarEntrada);
        elementosGirar[i].addEventListener('mouseout', girarSalida);
    }

    // Aplicamos el ciclo al nuevo efecto
    for (let i = 0; i < elementosFlotar.length; i++) {
        elementosFlotar[i].addEventListener('mouseover', flotarEntrada);
        elementosFlotar[i].addEventListener('mouseout', flotarSalida);
    }

    for (let i = 0; i < elementosDeslizar.length; i++) {
        elementosDeslizar[i].addEventListener('mouseover', deslizarEntrada);
        elementosDeslizar[i].addEventListener('mouseout', deslizarSalida);
    }
});