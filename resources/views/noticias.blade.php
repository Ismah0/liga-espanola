@extends('layouts.app')
@section('titulo', 'Noticias')

@section('contenido')

<style>
    /* Efecto 3D para el título (Igual que posiciones) */
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

    /* Fondo azul que combina con tu navbar */
    .caja-titulo-azul {
        background: linear-gradient(135deg, #152b45 0%, #0d47a1 100%);
        color: white;
    }

    /* Ajustes visuales para la tabla */
    .tabla-goleadores th {
        color: #6c757d;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    .tabla-goleadores td {
        vertical-align: middle;
        border-bottom: 1px solid #f8f9fa;
    }
    .tabla-goleadores tr:hover td {
        background-color: #f8f9fa; 
    }
    
    /* Estilo para el número de posición */
    .numero-posicion {
        font-size: 1.2rem;
        font-weight: 900;
        color: #adb5bd;
    }
    .top-1 { color: #ffc107; } /* Dorado para el primer lugar */
    .top-2 { color: #a3a3a3; } /* Plata para el segundo */
    .top-3 { color: #cd7f32; } /* Bronce para el tercero */

    /* ========================================== */
    /* NUEVO: ESTILO PARA EMPAREJAR LAS IMÁGENES  */
    /* ========================================== */
    .card-img-top {
        height: 220px; /* Puedes ajustar este número si las quieres más altas o bajas */
        object-fit: cover;
    }
</style>

<div class="container py-5">

    {{-- ========================================== --}}
    {{-- ENCABEZADO DE LA TABLA                     --}}
    {{-- ========================================== --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="caja-titulo-azul p-4 rounded-4 shadow-sm border-top border-4 border-warning text-center">
                <h2 class="h1 efecto-3d mb-1">Últimas Noticias</h2>
                <p class="text-white-50 font-light mb-0" style="letter-spacing: 1px;">
                    <i class="fa-solid fa-futbol me-2"></i>Mantente al día con las últimas noticias deportivas
                </p>
            </div>
        </div>
    </div>

<section class="row g-4">
    <article class="col-md-6 col-lg-4">
        <div class="card h-100 efecto-hover shadow-sm border-0">
            <img src="{{ asset('img/¡Épico-Clásico-en-el-Bernabéu!.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-primary mb-2">Destacado</span>
                <h3 class="h5 font-bold text-dark">Comparativa de los títulos del Real Madrid vs FC Barcelona</h3>
                <p class="text-secondary mt-2">Compara los títulos entre Real Madrid y FC Barcelona, y descubre quién ha logrado más éxitos en la historia del fútbol español en este duelo</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 efecto-hover shadow-sm border-0">
            <img src="{{ asset('img/Mbappé-He-venido-a-hacer-historia.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-dark mb-2">Entrevista</span>
                <h3 class="h5 font-bold text-dark">Mbappé: "He venido a hacer historia"</h3>
                <p class="text-secondary mt-2">Charlamos en exclusiva con la estrella merengue sobre su increíble adaptación al estilo de juego de La Liga.</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 efecto-hover shadow-sm border-0">
            <img src="{{ asset('img/Lamine-Yamal-rompe-otro-récord.jpeg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-secondary mb-2">Talentos</span>
                <h3 class="h5 font-bold text-dark">Lamine Yamal rompe otro récord</h3>
                <p class="text-secondary mt-2">Echamos un vistazo a la joven promesa culé, que sigue deslumbrando y se perfila como la revelación del año.</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 efecto-hover shadow-sm border-0">
            <img src="{{ asset('img/El-muro-del-Atlético-de-Madrid.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-primary mb-2">Análisis</span>
                <h3 class="h5 font-bold text-dark">El "muro" del Atlético de Madrid</h3>
                <p class="text-secondary mt-2">Un análisis táctico detallado de cómo el 'Cholo' Simeone ha reconstruido la defensa rojiblanca esta temporada.</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 efecto-hover shadow-sm border-0">
            <img src="{{ asset('img/Top-5-Goles-de-la-Jornada.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-dark mb-2">Resumen</span>
                <h3 class="h5 font-bold text-dark">Top 5 Goles de la Jornada</h3>
                <p class="text-secondary mt-2">Recordamos las mejores voleas, tiros libres y jugadas de fantasía que nos dejó este fin de semana de fútbol.</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 efecto-hover shadow-sm border-0">
            <img src="{{ asset('img/Alarma-en-el-Valencia-por-lesión.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-danger mb-2">Salud</span>
                <h3 class="h5 font-bold text-dark">Alarma en el Valencia por lesión</h3>
                <p class="text-secondary mt-2">Actualizaciones del parte médico: se confirma la baja de su mediocampista titular por las próximas 3 semanas.</p>
            </div>
        </div>
    </article>
</section>
</div>
@endsection