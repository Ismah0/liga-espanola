@extends('layouts.app')
@section('titulo', 'Noticias')

@section('contenido')
<div class="text-center mb-5">
    <h2 class="h2 font-bold text-primary">Últimas Noticias</h2>
    <p class="text-secondary">Mantente al día con las últimas noticias deportivas.</p>
</div>

<section class="row g-4">
    <article class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset('img/¡Épico-Clásico-en-el-Bernabéu!.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-primary mb-2">Destacado</span>
                <h3 class="h5 font-bold text-dark">¡Épico Clásico en el Bernabéu!</h3>
                <p class="text-secondary mt-2">El Real Madrid se lleva la victoria 2-1 en un final de infarto contra el Barcelona con un gol en el último minuto.</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset('img/Mbappé-He-venido-a-hacer-historia.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-dark mb-2">Entrevista</span>
                <h3 class="h5 font-bold text-dark">Mbappé: "He venido a hacer historia"</h3>
                <p class="text-secondary mt-2">Charlamos en exclusiva con la estrella merengue sobre su increíble adaptación al estilo de juego de La Liga.</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset('img/Lamine-Yamal-rompe-otro-récord.jpeg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-secondary mb-2">Talentos</span>
                <h3 class="h5 font-bold text-dark">Lamine Yamal rompe otro récord</h3>
                <p class="text-secondary mt-2">Echamos un vistazo a la joven promesa culé, que sigue deslumbrando y se perfila como la revelación del año.</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset('img/El-muro-del-Atlético-de-Madrid.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-primary mb-2">Análisis</span>
                <h3 class="h5 font-bold text-dark">El "muro" del Atlético de Madrid</h3>
                <p class="text-secondary mt-2">Un análisis táctico detallado de cómo el 'Cholo' Simeone ha reconstruido la defensa rojiblanca esta temporada.</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset('img/Top-5-Goles-de-la-Jornada.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-dark mb-2">Resumen</span>
                <h3 class="h5 font-bold text-dark">Top 5 Goles de la Jornada</h3>
                <p class="text-secondary mt-2">Recordamos las mejores voleas, tiros libres y jugadas de fantasía que nos dejó este fin de semana de fútbol.</p>
            </div>
        </div>
    </article>

    <article class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="{{ asset('img/Alarma-en-el-Valencia-por-lesión.jpg') }}" class="card-img-top" alt="Noticia">
            <div class="card-body p-4">
                <span class="badge bg-danger mb-2">Salud</span>
                <h3 class="h5 font-bold text-dark">Alarma en el Valencia por lesión</h3>
                <p class="text-secondary mt-2">Actualizaciones del parte médico: se confirma la baja de su mediocampista titular por las próximas 3 semanas.</p>
            </div>
        </div>
    </article>
</section>
@endsection