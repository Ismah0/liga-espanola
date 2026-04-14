<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Liga - @yield('titulo')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --bs-primary: #334F8C;
            --bs-primary-rgb: 51, 79, 140;
        }
        
        .bg-primary { background-color: var(--bs-primary) !important; }
        .text-primary { color: var(--bs-primary) !important; }
        .border-primary { border-color: var(--bs-primary) !important; }
        
        .btn-primary {
            background-color: var(--bs-primary) !important;
            border-color: var(--bs-primary) !important;
        }
        .btn-primary:hover {
            background-color: #253966 !important;
            border-color: #253966 !important;
        }
    </style>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    <header class="bg-primary text-white p-3">
        <div class="container d-flex justify-content-between align-items-center mb-2">
            <h1 class="h3 font-bold mb-0 d-flex align-items-center">
    <img src="{{ asset('img/escudo-pagina.png') }}" alt="Logo La Liga" style="width: 40px; height: 40px; object-fit: contain;" class="me-2">
    La Liga Española
            </h1>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search in site">
                <button class="btn btn-light" type="button">🔍</button>
            </form>
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

    <main class="container mt-4 mb-5">
        @yield('contenido')
    </main>

    <footer class="bg-dark text-white text-center p-3 mt-auto">
        <div class="container d-flex justify-content-between align-items-center">
            <p class="mb-0 font-light">&copy; 2026 La Liga Española</p>
            <div>
                <a href="#" class="text-white me-3">Política de privacidad</a>
                <a href="#" class="text-white">Términos y condiciones</a>
            </div>
        </div>
    </footer>

</body>
</html>