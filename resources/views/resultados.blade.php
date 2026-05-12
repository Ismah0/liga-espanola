@extends('layouts.app')
@section('titulo', 'Resultados')

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
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="caja-titulo-azul p-4 rounded-4 shadow-sm border-top border-4 border-warning text-center">
                <h2 class="h1 efecto-3d mb-1">Marcadores Finales</h2>
                <p class="text-white-50 font-light mb-0" style="letter-spacing: 1px;">
                    <i class="fa-solid fa-calendar-days me-2"></i>Resultados de los últimos partidos de fútbol
                </p>
            </div>
        </div>
    </div>

<section class="row justify-content-center">
    <div class="col-md-8">
        
        <article class="card border-0 shadow-sm mb-3">
            <div class="card-body efecto-hover d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center w-50">
                <img src="{{ asset('img/madrid-vs-barcelona.jpg') }}" class="rounded me-3 shadow-sm" style="width: 60px; height: 40px; object-fit: cover;" alt="Partido">
                <h4 class="h5 font-bold mb-0">Real Madrid vs FC Barcelona</h4>
            </div>
                <div class="bg-primary text-white px-4 py-2 rounded font-bold fs-4">0 - 2</div>
            </div>
        </article>

        <article class="card border-0 shadow-sm mb-3">
            <div class="card-body efecto-hover d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center w-50">
                <img src="{{ asset('img/Valencia-CF-vs-Atlético-de-Madrid.jpg') }}" class="rounded me-3 shadow-sm" style="width: 60px; height: 40px; object-fit: cover;" alt="Partido">
                <h4 class="h5 font-bold mb-0">Valencia CF vs Atlético de Madrid</h4>
                </div>
                <div class="bg-dark text-white px-4 py-2 rounded font-bold fs-4">0 - 3</div>
            </div>
        </article>

        <article class="card border-0 shadow-sm mb-3">
            <div class="card-body efecto-hover d-flex justify-content-between align-items-center p-4">
                <div class="d-flex align-items-center w-50">
                <img src="{{ asset('img/Sevilla-FC-vs-Real-Betis.jpg') }}" class="rounded me-3 shadow-sm" style="width: 60px; height: 40px; object-fit: cover;" alt="Partido">
                <h4 class="h5 font-bold mb-0">Sevilla FC vs Real Betis</h4>
                </div>
                <div class="bg-secondary text-white px-4 py-2 rounded font-bold fs-4">1 - 1</div>
            </div>
        </article>

        <article class="card border-0 shadow-sm mb-3">
            <div class="card-body efecto-hover d-flex justify-content-between align-items-center p-4">
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