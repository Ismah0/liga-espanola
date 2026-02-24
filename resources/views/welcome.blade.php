<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Liga - Inicio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">La Liga Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#equipos">Equipos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mb-5" id="equipos">Catálogo de Equipos</h1>

        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Barcelona</h5>
                        <p class="card-text">Consulta la historia, estadio y plantilla actual del equipo blaugrana.</p>
                        <a href="#" class="btn btn-primary">Ver Perfil</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Real Madrid</h5>
                        <p class="card-text">Consulta el palmarés y la información detallada del club merengue.</p>
                        <a href="#" class="btn btn-primary">Ver Perfil</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Atlético de Madrid</h5>
                        <p class="card-text">Toda la actualidad, resultados e historia del equipo colchonero.</p>
                        <a href="#" class="btn btn-primary">Ver Perfil</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <div class="row justify-content-center" id="contacto">
            <div class="col-md-6">
                <h3 class="text-center mb-3">Contacto</h3>
                <div class="card shadow-sm p-4 mb-5">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ej. Juan Pérez">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>