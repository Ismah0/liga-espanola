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
    
</head>
<body class="bg-light">
@include('components.navbar')

    <main class="container mt-4 mb-5">
        @yield('contenido')
    </main>
    
@include('components.footer')
</body>
</html>