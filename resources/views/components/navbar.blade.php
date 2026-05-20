
    <header class="bg-primary text-white p-3">
        <div class="container d-flex justify-content-between align-items-center mb-2">
            <h1 class="h3 font-bold mb-0 d-flex align-items-center">
    <img src="{{ asset('img/escudo-pagina.png') }}" alt="Logo La Liga" style="width: 40px; height: 40px; object-fit: contain;" class="me-2">
    La Liga Española
            </h1>
<div class="d-flex" id="caja-buscador-global">
    <input class="form-control me-2 shadow-sm" type="search" id="input-buscador-global" placeholder="Search in site">
    <button class="btn btn-light shadow-sm" type="button" id="btn-buscador-global">
        🔍
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('input-buscador-global');
        const btn = document.getElementById('btn-buscador-global');

        function buscarSeccion() {
            // Quitamos espacios y convertimos a minúsculas
            let busqueda = input.value.toLowerCase().trim();
            
            // Diccionario SUPER MEJORADO (a prueba de errores de escritura)
            const mapaRutas = {
                'inicio': '/', 'home': '/',
                
                // Variaciones para EQUIPOS
                'equipo': '/equipos', 'equipos': '/equipos', 'club': '/equipos', 'clubes': '/equipos',
                
                // Variaciones para CATÁLOGO / TIENDA
                'catalogo': '/catalogo', 'catálogo': '/catalogo', 'catalago': '/catalogo', 'catalagos': '/catalogo', 'tienda': '/catalogo', 'comprar': '/catalogo', 'producto': '/catalogo', 'productos': '/catalogo',
                
                // Las demás rutas
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

            // Buscamos coincidencia exacta o parcial
            for (const [palabraClave, ruta] of Object.entries(mapaRutas)) {
                if (busqueda.includes(palabraClave)) {
                    destino = ruta;
                    break; 
                }
            }

            if (destino) {
                // Redirige a la ruta correcta
                window.location.href = destino;
            } else if (busqueda !== "") {
                // Si no encuentra nada, avisa
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
        </div>

        <nav class="navbar navbar-expand navbar-dark bg-primary">
            <div class="container">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Inicio</a>
                    <a class="nav-link" href="/equipos">Equipos</a>
                    <a class="nav-link" href="/posiciones">Posiciones</a>
                    <a class="nav-link" href="/calendario">Calendario</a>
                    <a class="nav-link" href="/resultados">Resultados</a>
                    <a class="nav-link" href="/goleadores">Goleadores</a>
                    <a class="nav-link" href="/historia">Historia</a>
                    <a class="nav-link" href="/noticias">Noticias</a>
                    <a class="nav-link" href="/contacto">Contacto</a>
                    <a class="nav-link font-bold text-warning" href="/faq">FAQ</a>
                    <a class="nav-link font-bold text-warning" href="/catalogo">Catálogo / Tienda</a>
                </div>
            </div>
        </nav>
    </header>