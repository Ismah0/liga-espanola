@extends('layouts.app')

@section('titulo', 'Catálogo de Equipos')

@section('contenido')
<main class="contenido-central">
    <section class="seccion-principal" style="flex: 1;"> <h2>Sección: Catálogo de Equipos</h2>
        <div class="cuadricula-elementos" style="grid-template-columns: repeat(4, 1fr);">
            @for ($i = 1; $i <= 12; $i++)
                <article class="tarjeta-item">
                    Escudo Equipo {{ $i }}
                </article>
            @endfor
        </div>
    </section>
</main>
@endsection