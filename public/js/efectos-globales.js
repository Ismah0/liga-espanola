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

    document.addEventListener('DOMContentLoaded', function() {
    
    const formBuscador = document.getElementById('form-buscador-global');
    const inputBuscador = document.getElementById('input-buscador-global');

    if (formBuscador && inputBuscador) {
        formBuscador.addEventListener('submit', function(evento) {
            // Evitamos que la página se recargue al dar "Enter" o clic
            evento.preventDefault(); 
            
            // Obtenemos lo que escribió el usuario, en minúsculas y sin espacios extra
            let busqueda = inputBuscador.value.toLowerCase().trim();

            // Diccionario de rutas: "palabra clave" : "/ruta-de-laravel"
            const mapaRutas = {
                'inicio': '/',
                'home': '/',
                'equipo': '/equipos',
                'posicion': '/posiciones',
                'tabla': '/posiciones',
                'calendario': '/calendario',
                'fecha': '/calendario',
                'resultado': '/resultados',
                'marcador': '/resultados',
                'goleador': '/goleadores',
                'pichichi': '/goleadores',
                'historia': '/historia',
                'noticia': '/noticias',
                'contacto': '/contacto',
                'mensaje': '/contacto',
                'faq': '/faq',
                'pregunta': '/faq',
                'catalogo': '/catalogo',
                'tienda': '/catalogo',
                'comprar': '/catalogo',
                'producto': '/catalogo'
            };

            let destino = null;

            // Revisamos si lo que escribió coincide con alguna palabra clave de nuestro mapa
            for (const [palabraClave, ruta] of Object.entries(mapaRutas)) {
                if (busqueda.includes(palabraClave)) {
                    destino = ruta;
                    break; // Si encuentra una coincidencia, detenemos la búsqueda
                }
            }

            // Si encontró un destino, redirigimos. Si no, le avisamos al usuario.
            if (destino) {
                window.location.href = destino;
            } else {
                alert('No encontramos la sección "' + busqueda + '". Intenta buscar: Historia, Equipos, Catálogo, Posiciones...');
                inputBuscador.value = ""; // Limpiamos el buscador
            }
        });
    }
});
});