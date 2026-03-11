@extends('layouts.app')
@section('titulo', 'Inicio')

@section('contenido')
<div class="row">
    <section class="col-md-8">
        
        <div class="card mb-4 bg-dark text-white border-0 shadow">
            <img src="{{ asset('img/estadio-barca.jpg') }}" class="card-img" alt="Estadio" style="height: 350px; object-fit: cover; opacity: 0.5;">
            <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center p-5">
                <h2 class="h1 font-bold text-center display-4">¡Bienvenidos a La Liga!</h2>
                <p class="text-center font-light fs-4 mt-3 w-75">Sigue a tus equipos y partidos favoritos.</p>
            </div>
        </div>

        <h3 class="h3 mb-3 font-bold text-primary">Noticias Recientes</h3>
        <p class="text-secondary mb-4">Mantente al tanto de las últimas novedades del fútbol español.</p>
        
        <div class="row g-4">
            <article class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="h5 font-bold text-dark">Victoria del Real Madrid</h4>
                        <p class="card-text text-secondary mt-2 small lh-lg">El equipo se llevó la victoria en un emocionante partido que mantuvo a todos al borde de sus asientos.</p>
                        <button class="btn btn-primary btn-sm mt-3">Leer más</button>
                    </div>
                </div>
            </article>
            
            <article class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="h5 font-bold text-dark">Nuevo Fichaje en Barcelona</h4>
                        <p class="card-text text-secondary mt-2 small lh-lg">El equipo anunció un nuevo fichaje estrella para esta temporada que promete cambiar el esquema táctico.</p>
                        <button class="btn btn-primary btn-sm mt-3">Leer más</button>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <aside class="col-md-4 mt-4 mt-md-0 ps-md-4">
        <h3 class="h3 mb-3 font-bold text-dark">Tabla de Posiciones</h3>
        <div class="card shadow border-0 overflow-hidden">
            <div class="card-body p-0">
                <ul class="list-group list-group-flush table-hover align-middle">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <span class="font-bold d-flex align-items-center fs-6">
                            <img src="{{ asset('img/barca.png') }}" width="25" class="me-3" alt="Logo"> 
                            1. FC Barcelona
                        </span>
                        <span class="badge bg-primary rounded-pill fs-7 px-3 py-2">67 pts</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <span class="font-bold d-flex align-items-center fs-6">
                            <img src="{{ asset('img/realmadrid.png') }}" width="25" class="me-3" alt="Logo"> 
                            2. Real Madrid
                        </span>
                        <span class="badge bg-primary rounded-pill fs-7 px-3 py-2">63 pts</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <span class="font-bold d-flex align-items-center fs-6">
                            <img src="{{ asset('img/atlmadrid.png') }}" width="25" class="me-3" alt="Logo"> 
                            3. Atlético Madrid
                        </span>
                        <span class="badge bg-primary rounded-pill fs-7 px-3 py-2">54 pts</span>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</div>
@endsection