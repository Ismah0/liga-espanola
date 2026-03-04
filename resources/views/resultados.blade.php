@extends('layouts.app')
@section('titulo', 'Resultados')

@section('contenido')
<main class="contenido-central">
    <section class="seccion-principal" style="flex: 1;">
        <h2>Marcadores Finales</h2>
        <div class="cuadricula-elementos" style="grid-template-columns: repeat(2, 1fr);">
            <article class="tarjeta-item">Equipo A vs Equipo B: 2-1</article>
            <article class="tarjeta-item">Equipo C vs Equipo D: 0-3</article>
            <article class="tarjeta-item">Equipo E vs Equipo F: 1-1</article>
            <article class="tarjeta-item">Equipo G vs Equipo H: 4-0</article>
        </div>
    </section>
</main>
@endsection