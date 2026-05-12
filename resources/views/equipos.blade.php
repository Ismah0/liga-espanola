@extends('layouts.app')
@section('titulo', 'Catálogo de Equipos')

@section('contenido')
<div class="text-center mb-5" id="seccion-animada">
    <h2 class="efecto-deslizar h2 font-bold text-primary">Equipos de La Liga</h2>
    <p class="text-secondary">Conoce a los clubes que conforman la temporada.</p>
</div>

<section class="row g-4">
    
    <article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'barcelona']) }}" class="text-decoration-none">
        <div class="card efecto-hover efecto-flotar h-100 shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/barca.png') }}" class="card-img-top p-4" alt="FC Barcelona" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">FC Barcelona</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'real-madrid']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/realmadrid.png') }}" class="card-img-top p-4" alt="Real Madrid" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Real Madrid</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'atletico']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/atlmadrid.png') }}" class="card-img-top p-4" alt="Atlético de Madrid" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Atlético de Madrid</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'valencia']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/valencia.png') }}" class="card-img-top p-4" alt="Valencia CF" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Valencia CF</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'sevilla']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/sevilla.png') }}" class="card-img-top p-4" alt="Sevilla FC" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Sevilla FC</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'betis']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/betis.png') }}" class="card-img-top p-4" alt="Real Betis" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Real Betis</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'athletic']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/athletic.png') }}" class="card-img-top p-4" alt="Athletic Bilbao" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Athletic Bilbao</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'realsociedad']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/realsociedad.png') }}" class="card-img-top p-4" alt="Real Sociedad" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Real Sociedad</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'laspalmas']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/udlaspalmas.png') }}" class="card-img-top p-4" alt="UD Las Palmas" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">UD Las Palmas</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'mallorca']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/mallorca.png') }}" class="card-img-top p-4" alt="Mallorca" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Mallorca</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'granada']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/granada.png') }}" class="card-img-top p-4" alt="Granada CF" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Granada CF</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

<article class="col-6 col-md-4 col-lg-3">
    <a href="{{ route('detalle.equipo', ['equipo' => 'elche']) }}" class="text-decoration-none">
        <div class="card h-100 efecto-hover efecto-flotar shadow-sm text-center border-0" style="transition: transform 0.2s;">
            <img src="{{ asset('img/elche.png') }}" class="card-img-top p-4" alt="Elche CF" style="object-fit: contain; height: 160px;">
            <div class="card-body bg-light">
                <h3 class="h6 font-bold mb-1 text-dark">Elche CF</h3>
                <span class="badge bg-primary">Ver Perfil</span>
            </div>
        </div>
    </a>
</article>

</section>
@endsection