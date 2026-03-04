@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
<main class="contenido-central">
    <section class="seccion-principal">
        <h2>Sección Destacada</h2>
        <div class="tarjeta-item" style="height: 200px;">Banner Principal (Wireframe)</div>
        
        <h3>Sección de Noticias</h3>
        <div class="cuadricula-elementos">
            <article class="tarjeta-item">Artículo Noticia 1</article>
            <article class="tarjeta-item">Artículo Noticia 2</article>
            <article class="tarjeta-item">Artículo Noticia 3</article>
        </div>
    </section>

    <aside class="barra-lateral">
        <h3>Aside: Tabla Resumida</h3>
        <div class="tarjeta-item">Datos de tabla aquí</div>
    </aside>
</main>
@endsection