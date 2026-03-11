@extends('layouts.app')
@section('titulo', 'Calendario')

@section('contenido')
<div class="text-center mb-5">
    <h2 class="h2 font-bold text-primary">Calendario de Partidos</h2>
    <p class="text-secondary">Consulta los partidos programados de la temporada.</p>
    <button class="btn btn-dark mt-2 font-bold">Ver Próximos Partidos</button>
</div>

<section class="row justify-content-center">
    <div class="col-md-8">
        <h3 class="h4 font-bold text-dark mb-4 border-bottom pb-2">Partidos Programados</h3>
        
        <article class="card shadow-sm border-0 mb-3">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center">
                    <div class="bg-light rounded p-3 me-4 text-center">
                        <span class="d-block font-bold text-primary fs-5">14</span>
                        <span class="d-block text-secondary small">Mar 2026</span>
                    </div>
                    <img src="{{ asset('img/primer-partido.jpg') }}" class="rounded me-3 shadow-sm" style="width: 80px; height: 50px; object-fit: cover;" alt="Partido">
                    <div>
                        <h4 class="h5 font-bold mb-1">Real Madrid vs Elche CF</h4>
                        <span class="badge bg-secondary">La Liga</span>
                    </div>
                </div>
                <div class="text-end">
                    <span class="d-block font-bold fs-5">20:00</span>
                    <span class="text-secondary small">Horario</span>
                </div>
            </div>
        </article>

        <article class="card shadow-sm border-0 mb-3">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center">
                    <div class="bg-light rounded p-3 me-4 text-center">
                        <span class="d-block font-bold text-primary fs-5">15</span>
                        <span class="d-block text-secondary small">Mar 2026</span>
                    </div>
                    <img src="{{ asset('img/segundo-partido.jpg') }}" class="rounded me-3 shadow-sm" style="width: 80px; height: 50px; object-fit: cover;" alt="Partido">
                    <div>
                        <h4 class="h5 font-bold mb-1">Barcelona vs Sevilla</h4>
                        <span class="badge bg-secondary">La Liga</span>
                    </div>
                </div>
                <div class="text-end">
                    <span class="d-block font-bold fs-5">15:15</span>
                    <span class="text-secondary small">Horario</span>
                </div>
            </div>
        </article>

        <article class="card shadow-sm border-0 mb-3">
            <div class="card-body d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center">
                    <div class="bg-light rounded p-3 me-4 text-center">
                        <span class="d-block font-bold text-primary fs-5">22</span>
                        <span class="d-block text-secondary small">Mar 2026</span>
                    </div>
                    <img src="{{ asset('img/tercer-partido.jpg') }}" class="rounded me-3 shadow-sm" style="width: 80px; height: 50px; object-fit: cover;" alt="Partido">
                    <div>
                        <h4 class="h5 font-bold mb-1">Real Madrid vs Atlético Madrid</h4>
                        <span class="badge bg-danger">¡Derbi!</span>
                    </div>
                </div>
                <div class="text-end">
                    <span class="d-block font-bold fs-5">20:00</span>
                    <span class="text-secondary small">Horario</span>
                </div>
            </div>
        </article>
    </div>
</section>
@endsection