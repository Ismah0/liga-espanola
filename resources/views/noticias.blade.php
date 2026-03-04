@extends('layouts.app')
@section('titulo', 'Últimas Noticias')

@section('contenido')
<main class="contenido-central">
    <section class="seccion-principal" style="flex: 1;">
        <h2>Últimas Noticias</h2>
        <div class="cuadricula-elementos" style="grid-template-columns: repeat(3, 1fr);">
            <article class="tarjeta-item">Victoria Ajustada en el Clásico</article>
            <article class="tarjeta-item">Entrevista Exclusiva</article>
            <article class="tarjeta-item">Nuevos Talentos en la Liga</article>
            <article class="tarjeta-item">Análisis del Partido de Ayer</article>
            <article class="tarjeta-item">Las Mejores Jugadas</article>
            <article class="tarjeta-item">Lesiones y Recuperaciones</article>
        </div>
    </section>
</main>
@endsection