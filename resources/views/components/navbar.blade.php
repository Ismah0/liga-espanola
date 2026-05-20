<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-3">
    <div class="container flex-wrap">
        
        <div class="d-flex justify-content-between w-100 align-items-center mb-lg-3">
            
            <a class="navbar-brand d-flex align-items-center m-0" href="/">
                <img src="{{ asset('img/escudo-pagina.png') }}" alt="Logo La Liga" style="width: 40px; height: 40px; object-fit: contain;" class="me-2">
                <h1 class="h4 font-bold mb-0 text-white">La Liga Española</h1>
            </a>

            <div class="d-none d-lg-flex ms-auto" style="width: 300px;">
                <input class="form-control me-2 shadow-sm" type="search" id="input-buscador-pc" placeholder="Search in site">
                <button class="btn btn-light shadow-sm" type="button" id="btn-buscador-pc">🔍</button>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse w-100" id="menuNavegacion">
            
            <div class="d-flex d-lg-none mt-3 mb-4">
                <input class="form-control me-2 shadow-sm" type="search" id="input-buscador-movil" placeholder="Search in site">
                <button class="btn btn-light shadow-sm" type="button" id="btn-buscador-movil">🔍</button>
            </div>

            <ul class="navbar-nav w-100 d-flex justify-content-lg-between flex-wrap">
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
        </div>

    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // Función maestra de búsqueda
        function buscarSeccion(textoBusqueda) {
            let busqueda = textoBusqueda.toLowerCase().trim();
            
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
            }
        }

        // Conectar los eventos a los dos buscadores (PC y Móvil)
        const configuraciones = [
            { idInput: 'input-buscador-pc', idBtn: 'btn-buscador-pc' },
            { idInput: 'input-buscador-movil', idBtn: 'btn-buscador-movil' }
        ];

        configuraciones.forEach(config => {
            const inputEl = document.getElementById(config.idInput);
            const btnEl = document.getElementById(config.idBtn);

            if (inputEl && btnEl) {
                btnEl.addEventListener('click', () => {
                    buscarSeccion(inputEl.value);
                    inputEl.value = ""; // Limpiar después de buscar
                });
                
                inputEl.addEventListener('keypress', function(evento) {
                    if (evento.key === 'Enter') {
                        evento.preventDefault(); 
                        buscarSeccion(inputEl.value);
                        inputEl.value = ""; // Limpiar después de buscar
                    }
                });
            }
        });

    });
</script>