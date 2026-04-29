document.addEventListener('DOMContentLoaded', function() {
    // 1. Enlace a divisiones mediante ClassName
    // Buscamos todos los elementos que tengan la clase 'efecto-hover'
    let elementos = document.getElementsByClassName('efecto-hover');

    // 2. Funciones explícitas para las acciones del mouse
    function aplicarResalte(evento) {
        let el = evento.currentTarget;
        
        // Aplicar transformación de escala (5% más grande)
        el.style.transform = "scale(1.05)";
        el.style.transition = "all 0.3s ease";
        
        // Usar classList para cambiar el borde, sombra y redondeado
        // Quitamos estilos base de la tarjeta para que resalte el nuevo borde
        el.classList.remove('border-0', 'shadow-sm');
        el.classList.add('border', 'border-primary', 'border-3', 'shadow-lg', 'rounded-4');
    }

    function quitarResalte(evento) {
        let el = evento.currentTarget;
        
        // Restaurar la escala original
        el.style.transform = "scale(1)";
        
        // Restaurar estilos originales de la tarjeta
        el.classList.remove('border', 'border-primary', 'border-3', 'shadow-lg', 'rounded-4');
        el.classList.add('border-0', 'shadow-sm');
    }

    // 3. Agregar evento mediante addEventListener usando un ciclo
    for (let i = 0; i < elementos.length; i++) {
        elementos[i].addEventListener('mouseover', aplicarResalte);
        elementos[i].addEventListener('mouseout', quitarResalte);
    }
});