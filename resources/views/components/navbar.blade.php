<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm p-3">
    <div class="container">
        
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('img/escudo-pagina.png') }}" alt="Logo La Liga" style="width: 40px; height: 40px; object-fit: contain;" class="me-2">
            <h1 class="h4 font-bold mb-0 text-white">La Liga Española</h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavegacion">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-3 mt-lg-0">
                <li class="nav-item"><a class="nav-link text-white" href="/">Inicio</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/equipos">Equipos</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/posiciones">Posiciones</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/calendario">Calendario</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/resultados">Resultados</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/goleadores">Goleadores</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/historia">Historia</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/contacto">Contacto</a></li>
                <li class="nav-item"><a class="nav-link text-warning font-bold" href="/faq">FAQ</a></li>
                <li class="nav-item"><a class="nav-link text-warning font-bold" href="/catalogo">Catálogo / Tienda</a></li>
            </ul>

            <div class="d-flex" id="caja-buscador-global">
                <input class="form-control me-2 shadow-sm" type="search" id="input-buscador-global" placeholder="Search in site">
                <button class="btn btn-light shadow-sm" type="button" id="btn-buscador-global">🔍</button>
            </div>
            
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('input-buscador-global');
        const btn = document.getElementById('btn-buscador-global');

        function buscarSeccion() {
            let busqueda = input.value.toLowerCase().trim();
            
            const mapaRutas = {
                'inicio': '/', 'home': '/',
                'equipo': '/equipos', 'equipos': '/equipos', 'club': '/equipos', 'clubes': '/equipos',
                'catalogo': '/catalogo', 'catálogo': '/catalogo', 'catalago': '/catalogo', 'catalagos': '/catalogo', 'tienda': '/catalogo', 'comprar': '/catalogo', 'producto': '/catalogo', 'productos': '/catalogo',
                'posicion': '/posiciones', 'posiciones': '/posiciones', 'tabla': '/posiciones',
                'calendario': '/calendario', 'fecha': '/calendario',
                'resultado': '/resultados', 'resultados': '/resultados', 'marcador': '/resultados',
                'goleador': '/goleadores', 'goleadores': '/goleadores', 'pichichi': '/goleadores',
                'historia': '/historia',
                'noticia': '/noticias', 'noticias': '/noticias',
                'contacto': '/contacto', 'mensaje': '/contacto',
                'faq': '/faq', 'pregunta': '/faq', 'preguntas': '/faq'
            };

            let destino = null;

            for (const [palabraClave, ruta] of Object.entries(mapaRutas)) {
                if (busqueda.includes(palabraClave)) {
                    destino = ruta;
                    break; 
                }
            }

            if (destino) {
                window.location.href = destino;
            } else if (busqueda !== "") {
                alert('No encontramos la sección "' + busqueda + '". Intenta buscar: Historia, Goleadores, Catálogo, Equipos...');
                input.value = "";
            }
        }

        if (btn && input) {
            btn.addEventListener('click', buscarSeccion);
            input.addEventListener('keypress', function(evento) {
                if (evento.key === 'Enter') {
                    evento.preventDefault(); 
                    buscarSeccion();
                }
            });
        }
    });
</script>