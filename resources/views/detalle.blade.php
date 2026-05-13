@extends('layouts.app')

@section('contenido')
<div class="container py-5">

<style>
    .efecto-3d {
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 3px;
        color: #ffffff;
        text-shadow: 
            2px 2px 0px #5f6a7b,
            4px 4px 0px rgba(0, 0, 0, 0.8);
        border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        padding-bottom: 15px;
        margin-bottom: 10px;
        display: inline-block;
    }
</style>

    {{-- ========================================== --}}
    {{-- 1. FC BARCELONA                            --}}
    {{-- ========================================== --}}
    @if($equipoSeleccionado == 'barcelona')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class=" efecto-3d h1  ">FC Barcelona</h2>
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
                            <p class="text-secondary mb-0">Spotify Camp Nou</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
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

    {{-- ========================================== --}}
    {{-- 2. REAL MADRID                             --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'real-madrid')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1 ">Real Madrid CF</h2>
            <p class="font-light mt-2">El club más laureado de la historia, el Rey de Europa con 15 Champions.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/madrid.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-madrid.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Santiago Bernabéu</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/vinicius.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Vinícius Jr">
                    <h4 class="h6 font-bold mb-0">Vinícius Jr</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 15</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/bellingham.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jude Bellingham">
                    <h4 class="h6 font-bold mb-0">J. Bellingham</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 8</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/rudiger.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Rüdiger">
                    <h4 class="h6 font-bold mb-0">Rüdiger</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 40</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/courtois.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Courtois">
                    <h4 class="h6 font-bold mb-0">Courtois</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 25</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 3. ATLÉTICO DE MADRID                      --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'atletico')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1">Atlético de Madrid</h2>
            <p class="font-light mt-2">Coraje y corazón. Un equipo que nunca deja de creer.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/atlmadrid.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-atleti.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Cívitas Metropolitano</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/griezmann.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Griezmann">
                    <h4 class="h6 font-bold mb-0">Griezmann</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 12</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/koke.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Koke">
                    <h4 class="h6 font-bold mb-0">Koke</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 7</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/gimenez.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Giménez">
                    <h4 class="h6 font-bold mb-0">Giménez</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 35</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/oblak.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Oblak">
                    <h4 class="h6 font-bold mb-0">Oblak</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 28</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 4.VALENCIA CF        --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'valencia')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1">Valencia CF</h2>
            <p class="font-light mt-2">Sentiment. Un histórico del fútbol español con una afición única.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/valencia.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-valencia.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Mestalla</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/hugo-duro.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Hugo Duro">
                    <h4 class="h6 font-bold mb-0">Hugo Duro</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 10</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/pepelu.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Pepelu">
                    <h4 class="h6 font-bold mb-0">Pepelu</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 5</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/gaya.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Gayà">
                    <h4 class="h6 font-bold mb-0">Gayà</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 30</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/mamardashvili.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Mamardashvili">
                    <h4 class="h6 font-bold mb-0">Mamardashvili</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 35</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 5. SEVILLA FC                              --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'sevilla')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1">Sevilla FC</h2>
            <p class="font-light mt-2">Casta y coraje. Los reyes indiscutibles de la UEFA Europa League.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/sevilla.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-sevilla.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Ramón Sánchez-Pizjuán</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/en-nesyri.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 1">
                    <h4 class="h6 font-bold mb-0">En-Nesyri</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 11</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/ocampos.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 2">
                    <h4 class="h6 font-bold mb-0">Ocampos</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 4</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/navas.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 3">
                    <h4 class="h6 font-bold mb-0">Jesús Navas</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 20</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/nyland.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 4">
                    <h4 class="h6 font-bold mb-0">Nyland</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 22</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 6. REAL BETIS                              --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'betis')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1">Real Betis Balompié</h2>
            <p class="font-light mt-2">¡Viva el Betis manquepierda! Pasión en verde y blanco.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/betis.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-betis.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Benito Villamarín</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/willian-jose.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 1">
                    <h4 class="h6 font-bold mb-0">Willian José</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 9</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/isco.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 2">
                    <h4 class="h6 font-bold mb-0">Isco</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 8</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/pezzella.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 3">
                    <h4 class="h6 font-bold mb-0">Pezzella</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 28</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/rui-silva.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 4">
                    <h4 class="h6 font-bold mb-0">Rui Silva</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 18</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 7. ATHLETIC BILBAO                         --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'athletic')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1">Athletic Club</h2>
            <p class="font-light mt-2">Con filosofía única. Un club que compite solo con jugadores de la tierra.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/athletic.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-athletic.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">San Mamés</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/inaki-williams.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 1">
                    <h4 class="h6 font-bold mb-0">Iñaki Williams</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 12</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/sancet.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 2">
                    <h4 class="h6 font-bold mb-0">Sancet</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 6</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/vivian.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 3">
                    <h4 class="h6 font-bold mb-0">Vivian</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 32</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/unai-simon.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 4">
                    <h4 class="h6 font-bold mb-0">Unai Simón</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 24</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 8. REAL SOCIEDAD                           --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'realsociedad')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1">Real Sociedad</h2>
            <p class="font-light mt-2">Aurrera Reala. Elegancia y buen fútbol desde San Sebastián.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/realsociedad.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-realsociedad.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Reale Arena (Anoeta)</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/oyarzabal.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 1">
                    <h4 class="h6 font-bold mb-0">Oyarzabal</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 8</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/kubo.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 2">
                    <h4 class="h6 font-bold mb-0">Take Kubo</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 7</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/zubimendi.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 3">
                    <h4 class="h6 font-bold mb-0">Zubimendi</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 35</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/remiro.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 4">
                    <h4 class="h6 font-bold mb-0">Remiro</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 20</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 9. LAS PALMAS                              --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'laspalmas')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1 ">UD Las Palmas</h2>
            <p class="font-light mt-2">El orgullo canario. Fútbol de toque y calidad técnica.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/laspalmas.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-laspalmas.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Gran Canaria</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/sandro.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 1">
                    <h4 class="h6 font-bold mb-0">Sandro</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 6</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/kirian.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 2">
                    <h4 class="h6 font-bold mb-0">Kirian</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 5</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/coco.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 3">
                    <h4 class="h6 font-bold mb-0">Saúl Coco</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 25</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/valles.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 4">
                    <h4 class="h6 font-bold mb-0">Álvaro Valles</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 30</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 10. MALLORCA                               --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'mallorca')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1 ">RCD Mallorca</h2>
            <p class="font-light mt-2">Tota una vida. El equipo de la isla de Palma.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/mallorca.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-mallorca.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Son Moix</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/muriqi.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 1">
                    <h4 class="h6 font-bold mb-0">Muriqi</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 12</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/darder.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 2">
                    <h4 class="h6 font-bold mb-0">Sergi Darder</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 4</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/raillo.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 3">
                    <h4 class="h6 font-bold mb-0">Raíllo</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 31</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/rajkovic.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 4">
                    <h4 class="h6 font-bold mb-0">Rajkovic</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 22</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 11. GRANADA CF                             --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'granada')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1 ">Granada CF</h2>
            <p class="font-light mt-2">Eterna lucha. Un equipo que siempre pelea hasta el final.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/granada.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-granada.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Nuevo Los Cármenes</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/uzuni.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 1">
                    <h4 class="h6 font-bold mb-0">Uzuni</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 9</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/villar.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 2">
                    <h4 class="h6 font-bold mb-0">Gonzalo Villar</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 3</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/miquel.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 3">
                    <h4 class="h6 font-bold mb-0">Ignasi Miquel</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 22</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/batalla.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 4">
                    <h4 class="h6 font-bold mb-0">Batalla</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 15</p>
                </article>
            </div>
        </section>

    {{-- ========================================== --}}
    {{-- 12. ELCHE CF                               --}}
    {{-- ========================================== --}}
    @elseif($equipoSeleccionado == 'elche')
        <div class="text-center mb-5 bg-dark text-white p-5 rounded shadow">
            <h2 class="efecto-3d h1 ">Elche CF</h2>
            <p class="font-light mt-2">Mucho Elche. El club franjiverde de la ciudad de las palmeras.</p>
        </div>

        <section class="mb-5">
            <h3 class="h3 font-bold text-primary text-center mb-4">Escudo y Estadio</h3>
            <div class="row g-4 justify-content-center">
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/elche.png') }}" class="card-img-top p-4 mx-auto" style="height: 200px; width: auto; object-fit: contain;" alt="Escudo">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Escudo</h4>
                            <p class="text-secondary mb-0">El emblema del equipo.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-5">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <img src="{{ asset('img/estadio-elche.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Estadio">
                        <div class="card-body bg-light">
                            <h4 class="h5 font-bold">Estadio</h4>
                            <p class="text-secondary mb-0">Martínez Valero</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="text-center mb-5">
            <h3 class="h3 font-bold text-primary mb-4">Jugadores Clave</h3>
            <div class="row g-4">
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/boye.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 1">
                    <h4 class="h6 font-bold mb-0">Lucas Boyé</h4>
                    <p class="text-secondary small mb-2">Delantero</p>
                    <p class="font-bold text-dark">Goles: 7</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/fidel.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 2">
                    <h4 class="h6 font-bold mb-0">Fidel</h4>
                    <p class="text-secondary small mb-2">Centrocampista</p>
                    <p class="font-bold text-dark">Asistencias: 5</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/bigas.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 3">
                    <h4 class="h6 font-bold mb-0">Bigas</h4>
                    <p class="text-secondary small mb-2">Defensor</p>
                    <p class="font-bold text-dark">Intercepciones: 19</p>
                </article>
                <article class="col-6 col-md-3">
                    <img src="{{ asset('img/edgar-badia.png') }}" class="rounded-circle mb-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="Jugador 4">
                    <h4 class="h6 font-bold mb-0">Edgar Badia</h4>
                    <p class="text-secondary small mb-2">Portero</p>
                    <p class="font-bold text-dark">Paradas: 26</p>
                </article>
            </div>
        </section>

    @endif

</div>
@endsection