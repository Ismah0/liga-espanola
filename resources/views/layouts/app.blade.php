<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Wireframe - @yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="contenedor-principal">
        <header class="area-header">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                <h1>[Logo] Liga Española</h1>
                
                <form style="display: flex; gap: 5px;">
                    <input type="search" placeholder="Search in site" style="padding: 5px; width: 200px; border: 1px solid #ccc;">
                    <button type="button" style="padding: 5px; cursor: pointer;">🔍</button>
                </form>
            </div>

            <nav class="menu-principal">
                <a href="/">Inicio</a>
                <a href="/equipos">Equipos</a>
                <a href="/detalle">Detalle</a>
                <a href="/posiciones">Posiciones</a>
                <a href="/calendario">Calendario</a>
                <a href="/resultados">Resultados</a>
                <a href="/goleadores">Goleadores</a>
                <a href="/historia">Historia</a>
                <a href="/noticias">Noticias</a>
                <a href="/contacto">Contacto</a>
            </nav>
        </header>

        @yield('contenido')

        <footer class="pie-pagina">
            <p>Pie de página estructural | Enlaces Legales</p>
        </footer>
    </div>
</body>
</html>