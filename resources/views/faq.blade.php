@extends('layouts.app')
@section('titulo', 'Preguntas Frecuentes')

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

    /* Fondo azul del título */
    .caja-titulo-azul {
        background: linear-gradient(135deg, #152b45 0%, #0d47a1 100%);
        color: white;
        border-top: 4px solid #ffc107;
        border-radius: 15px;
    }

    /* Ocultar respuestas por defecto (para tu JS) */
    .hidden {
        display: none !important;
    }

    /* Diseño corregido para las barras de preguntas */
    .faq-item {
        margin-bottom: 1rem;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .faq-btn {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f8f9fa; /* Gris clarito */
        border: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: #333;
        transition: background-color 0.3s ease;
    }

    .faq-btn:hover {
        background-color: #e2e6ea;
        cursor: pointer;
    }

    .faq-content {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-top: none;
        padding: 1.2rem 1.5rem;
        color: #555;
        font-size: 0.95rem;
        line-height: 1.5;
    }
</style>

<div class="container py-5">
    
    {{-- ========================================== --}}
    {{-- ENCABEZADO ESTILO PREMIUM                  --}}
    {{-- ========================================== --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="caja-titulo-azul p-4 shadow-sm text-center">
                <h2 class="h1 efecto-3d mb-1">Preguntas Frecuentes</h2>
                <p class="text-white-50 mb-0" style="letter-spacing: 1px;">
                    Todo lo que necesitas saber sobre el torneo
                </p>
            </div>
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- CONTENIDO DE PREGUNTAS                     --}}
    {{-- ========================================== --}}
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            {{-- Pregunta 1 --}}
            <div class="faq-item">
                <button id="p1" class="faq-btn">
                    <span>¿Cuándo inicia la próxima temporada de La Liga?</span>
                    <span class="text-secondary">▼</span>
                </button>
                <div id="r1" class="faq-content hidden">
                    La próxima temporada de La Liga Española está programada para iniciar en la segunda semana de agosto del presente año.
                </div>
            </div>

            {{-- Pregunta 2 --}}
            <div class="faq-item">
                <button id="p2" class="faq-btn">
                    <span>¿Cómo puedo comprar boletos para un partido?</span>
                    <span class="text-secondary">▼</span>
                </button>
                <div id="r2" class="faq-content hidden">
                    Los boletos se pueden adquirir a través de los sitios web oficiales de cada club o en nuestra sección de 'Boletos' una vez que el calendario oficial sea publicado.
                </div>
            </div>

            {{-- Pregunta 3 --}}
            <div class="faq-item">
                <button id="p3" class="faq-btn">
                    <span>¿Qué equipos ascendieron este año?</span>
                    <span class="text-secondary">▼</span>
                </button>
                <div id="r3" class="faq-content hidden">
                    Este año damos la bienvenida a La Liga a los recién ascendidos: Valladolid, Leganés y Espanyol, quienes lograron su pase desde Segunda División.
                </div>
            </div>

            {{-- Botón de Contacto --}}
            <div class="text-center mt-5">
                <p class="text-secondary mb-2">¿Aún tienes dudas? Contáctanos directamente.</p>
                <button class="btn btn-dark px-4 py-2 fw-bold rounded-pill shadow-sm">
                    Enviar un mensaje
                </button>
            </div>

        </div>
    </div>
</div>

<script src="{{ asset('js/faq.js') }}"></script>
@endsection