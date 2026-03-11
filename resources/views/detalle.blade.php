@extends('layouts.app')
@section('titulo', 'Perfil del Equipo')

@section('contenido')
<div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
    <h2 class="h1 font-bold">FC Barcelona</h2>
    <p class="font-light mt-2">Fundado en 1899, es uno de los clubes más exitosos y reconocidos del fútbol mundial.</p>
</div>

<section class="mb-5">
    <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
    <div class="row g-4 justify-content-center">
        <article class="col-md-5">
            <div class="card border-0 shadow-sm h-100 text-center">
                <img src="{{ asset('img/barca.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                <div class="card-body bg-light">
                    <h4 class="h5 font-bold">Escudo</h4>
                    <p class="text-secondary mb-0">El emblema del equipo.</p>
                </div>
            </div>
        </article>
        <article class="col-md-5">
            <div class="card border-0 shadow-sm h-100 text-center">
                <img src="{{ asset('img/estadio-barca.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                <div class="card-body bg-light">
                    <h4 class="h5 font-bold">Estadio</h4>
                    <p class="text-secondary mb-0">El hogar del equipo.</p>
                </div>
            </div>
        </article>
    </div>
</section>

<section class="text-center">
    <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
    <div class="row g-4">
        <article class="col-6 col-md-3">
            <img src="{{ asset('img/LAMINE-YAMAL.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Lamine Yamal">
            <h4 class="h6 font-bold mb-0">Lamine Yamal</h4>
            <p class="text-secondary small mb-2">Delantero</p>
            <p class="font-bold text-dark">Goles: 13</p>
        </article>
        <article class="col-6 col-md-3">
            <img src="{{ asset('img/PEDRI-min.jpg') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Pedri">
            <h4 class="h6 font-bold mb-0">Pedri</h4>
            <p class="text-secondary small mb-2">Centrocampista</p>
            <p class="font-bold text-dark">Asistencias: 6</p>
        </article>
        <article class="col-6 col-md-3">
            <img src="{{ asset('img/ERIC GARCÍA-min.jpg') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Eric García">
            <h4 class="h6 font-bold mb-0">Eric García</h4>
            <p class="text-secondary small mb-2">Defensor</p>
            <p class="font-bold text-dark">Intercepciones: 36</p>
        </article>
        <article class="col-6 col-md-3">
            <img src="{{ asset('img/joan-garcia.jpg') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Joan García">
            <h4 class="h6 font-bold mb-0">Joan García</h4>
            <p class="text-secondary small mb-2">Portero</p>
            <p class="font-bold text-dark">Paradas: 20</p>
        </article>
    </div>
</section>
@endsection