@extends('layouts.app')
@section('titulo', 'Perfil del Equipo')

@section('contenido')
<main class="contenido-central" style="flex-direction: column;">
    <section class="seccion-principal" style="text-align: center; background-color: #eee;">
        <h2>Nombre del Equipo</h2>
        <p>Historia y detalles importantes del equipo</p>
    </section>

    <section class="seccion-principal">
        <h3>Estadísticas del Equipo</h3>
        <div class="cuadricula-elementos" style="grid-template-columns: repeat(2, 1fr);">
            <article class="tarjeta-item">Partidos Jugados: 30</article>
            <article class="tarjeta-item">Victorias: 20</article>
        </div>
    </section>

    <section class="seccion-principal">
        <h3>Escudo y Estadio</h3>
        <div class="cuadricula-elementos" style="grid-template-columns: repeat(2, 1fr);">
            <article class="tarjeta-item">Escudo del equipo</article>
            <article class="tarjeta-item">Estadio del equipo</article>
        </div>
    </section>

    <section class="seccion-principal">
        <h3>Jugadores Clave</h3>
        <div class="cuadricula-elementos" style="grid-template-columns: repeat(4, 1fr);">
            <article class="tarjeta-item">Jugador 1</article>
            <article class="tarjeta-item">Jugador 2</article>
            <article class="tarjeta-item">Jugador 3</article>
            <article class="tarjeta-item">Jugador 4</article>
        </div>
    </section>
</main>
@endsection