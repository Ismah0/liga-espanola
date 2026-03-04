@extends('layouts.app')
@section('titulo', 'Calendario')

@section('contenido')
<main class="contenido-central">
    <section class="seccion-principal" style="flex: 1;">
        <h2>Calendario de Partidos</h2>
        <div style="display: flex; flex-direction: column; gap: 15px;">
            <article class="tarjeta-item" style="height: auto; padding: 20px;">12/12/2026 - Equipo A vs Equipo B (19:00)</article>
            <article class="tarjeta-item" style="height: auto; padding: 20px;">14/12/2026 - Equipo C vs Equipo D (20:00)</article>
            <article class="tarjeta-item" style="height: auto; padding: 20px;">16/12/2026 - Equipo E vs Equipo F (21:00)</article>
        </div>
    </section>
</main>
@endsection