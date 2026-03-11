@extends('layouts.app')
@section('titulo', 'Resultados')

@section('contenido')
<div class="text-center mb-5">
    <h2 class="h2 font-bold text-primary">Marcadores Finales</h2>
    <p class="text-secondary">Resultados de los últimos partidos de fútbol.</p>
</div>

<section class="row justify-content-center">
    <div class="col-md-8">
        
        <article class="card border-0 shadow-sm mb-3">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center w-50">
                <img src="{{ asset('img/madrid-vs-barcelona.jpg') }}" class="rounded me-3 shadow-sm" style="width: 60px; height: 40px; object-fit: cover;" alt="Partido">
                <h4 class="h5 font-bold mb-0">Real Madrid vs FC Barcelona</h4>
            </div>
                <div class="bg-primary text-white px-4 py-2 rounded font-bold fs-4">2 - 1</div>
            </div>
        </article>

        <article class="card border-0 shadow-sm mb-3">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center w-50">
                <img src="{{ asset('img/Valencia-CF-vs-Atlético-de-Madrid.jpg') }}" class="rounded me-3 shadow-sm" style="width: 60px; height: 40px; object-fit: cover;" alt="Partido">
                <h4 class="h5 font-bold mb-0">Valencia CF vs Atlético de Madrid</h4>
                </div>
                <div class="bg-dark text-white px-4 py-2 rounded font-bold fs-4">0 - 3</div>
            </div>
        </article>

        <article class="card border-0 shadow-sm mb-3">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center w-50">
                <img src="{{ asset('img/Sevilla-FC-vs-Real-Betis.jpg') }}" class="rounded me-3 shadow-sm" style="width: 60px; height: 40px; object-fit: cover;" alt="Partido">
                <h4 class="h5 font-bold mb-0">Sevilla FC vs Real Betis</h4>
                </div>
                <div class="bg-secondary text-white px-4 py-2 rounded font-bold fs-4">1 - 1</div>
            </div>
        </article>

        <article class="card border-0 shadow-sm mb-3">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center w-50">
                <img src="{{ asset('img/Villarreal-CF-vs-Celta-de-Vigo.jpg') }}" class="rounded me-3 shadow-sm" style="width: 60px; height: 40px; object-fit: cover;" alt="Partido">
                <h4 class="h5 font-bold mb-0">Villarreal CF vs Celta de Vigo</h4>
                </div>
                <div class="bg-dark text-white px-4 py-2 rounded font-bold fs-4">4 - 0</div>
            </div>
        </article>

    </div>
</section>
@endsection