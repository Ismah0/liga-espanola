@extends('layouts.app')
@section('titulo', 'Historia')

@section('contenido')
<section class="card bg-dark text-white border-0 shadow mb-5 overflow-hidden">
    <img src="{{ asset('img/balon.jpg') }}" class="card-img" alt="Balón antiguo" style="height: 380px; object-fit: cover; opacity: 0.5;">
    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center p-5">
        <h2 class="h1 font-bold display-4">Legado de La Liga</h2>
        <p class="fs-4 font-light mt-3 w-75">Casi un siglo de pasión, leyendas y el mejor fútbol del mundo. Explora nuestras raíces.</p>
    </div>
</section>

<div class="text-center mb-5">
    <h3 class="h2 font-bold text-primary">Historia del Torneo</h3>
    <p class="text-secondary fs-5">Todo lo que necesitas saber sobre los orígenes y campeones.</p>
</div>

<section class="row g-4 justify-content-center mb-5">
    <article class="col-md-5">
        <div class="card h-100 shadow-sm border-0 overflow-hidden">
            <img src="{{ asset('img/trofeo.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Orígenes">
            <div class="card-body p-4">
                <h4 class="h4 font-bold text-dark mb-3">Orígenes del Torneo</h4>
                <p class="text-secondary lh-lg small">La Primera División de España, conocida como La Liga, se fundó en 1929 con tan solo 10 equipos. Desde su primer campeonato, se ha convertido en el máximo referente del fútbol mundial.</p>
            </div>
        </div>
    </article>

    <article class="col-md-5">
        <div class="card h-100 shadow-sm border-0 overflow-hidden">
            <img src="{{ asset('img/escudos-antiguos.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Campeones">
            <div class="card-body p-4">
                <h4 class="h4 font-bold text-dark mb-3">Campeones Históricos</h4>
                <p class="text-secondary lh-lg small">A lo largo de las décadas, gigantes como el Real Madrid y el FC Barcelona han dominado el palmarés, forjando rivalidades legendarias junto al Atlético de Madrid y el Athletic Club.</p>
            </div>
        </div>
    </article>
</section>
@endsection