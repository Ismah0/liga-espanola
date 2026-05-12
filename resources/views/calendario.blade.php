@extends('layouts.app')
@section('titulo', 'Calendario')

@section('contenido')
<style>
    /* Efecto 3D para el título */
    .efecto-3d {
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 4px;
        color: #ffffff;
        text-shadow: 
            2px 2px 0px #0b5ed7, 
            4px 4px 0px rgba(0, 0, 0, 0.4);
        display: inline-block;
        margin-bottom: 5px;
    }

   
    .caja-titulo-azul {
        background: linear-gradient(135deg, #152b45 0%, #0d47a1 100%);
        color: white;
    }

    
    .forma-icono {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        color: white;
        font-size: 12px;
        font-weight: bold;
        margin: 0 2px;
    }
    
    
    .forma-g { background-color: #28a745; } /* Verde */
    .forma-e { background-color: #adb5bd; } /* Gris */
    .forma-p { background-color: #dc3545; } /* Rojo */
    
    
    .tabla-posiciones th {
        color: #6c757d;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    .tabla-posiciones td {
        vertical-align: middle;
        border-bottom: 1px solid #f8f9fa;
    }
    .tabla-posiciones tr:hover td {
        background-color: #f8f9fa; 
    }
</style>

<div class="container py-5">
    
    {{-- ========================================== --}}
    {{-- ENCABEZADO DE LA TABLA                     --}}
    {{-- ========================================== --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="caja-titulo-azul p-4 rounded-4 shadow-sm border-top border-4 border-warning text-center">
                <h2 class="h1 efecto-3d mb-1">Calendario de Partidos</h2>
                <p class="text-white-50 font-light mb-0" style="letter-spacing: 1px;">
                    <i class="fa-solid fa-calendar-days me-2"></i>Consulta los partidos programados de la temporada
                        
                </p>
                <button class="btn btn-dark mt-2 font-bold">Ver Próximos Partidos</button>
            </div>
        </div>
    </div>

<section class="row justify-content-center">
    <div class="col-md-8">
        <h3 class="h4 font-bold text-dark mb-4 border-bottom pb-2">Partidos Programados</h3>
        
        <article class="card shadow-sm border-0 mb-3">
            <div class="card-body efecto-hover d-flex justify-content-between align-items-center p-4">
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
            <div class="card-body efecto-hover d-flex justify-content-between align-items-center p-4">
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
            <div class="card-body efecto-hover d-flex justify-content-between align-items-center p-4">
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