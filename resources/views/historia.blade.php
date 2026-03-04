@extends('layouts.app')
@section('titulo', 'Historia')

@section('contenido')
<main class="contenido-central">
    <section class="seccion-principal" style="flex: 1;">
        <h2>Historia del Torneo</h2>
        <div class="tarjeta-item" style="height: 150px; margin-bottom: 20px;">Banner Historia del Torneo</div>
        
        <article style="border: 1px solid #ccc; padding: 15px; margin-bottom: 15px;">
            <h3>Orígenes del Torneo</h3>
            <p>Texto estructural: El torneo de fútbol comenzó reuniendo a los mejores equipos...</p>
        </article>
        
        <article style="border: 1px solid #ccc; padding: 15px;">
            <h3>Campeones a lo Largo de los Años</h3>
            <p>Texto estructural: A lo largo de los años hemos visto a muchos campeones...</p>
        </article>
    </section>
</main>
@endsection