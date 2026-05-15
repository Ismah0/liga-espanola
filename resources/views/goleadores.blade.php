@extends('layouts.app')
@section('titulo', 'Top Goleadores')

@section('contenido')

{{-- ========================================== --}}
{{-- ESTILOS PERSONALIZADOS                     --}}
{{-- ========================================== --}}
<style>
    /* Efecto 3D para el título (Igual que posiciones) */
    .efecto-3d {
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 4px;
        color: #ffffff;
        text-shadow: 
            2px 2px 0px #0b5ed7, 
            4px 4px 0px rgba(0, 0, 0, 0.4);
        display: inline-block;
        margin-bottom: 5px;
    }

    /* Fondo azul que combina con tu navbar */
    .caja-titulo-azul {
        background: linear-gradient(135deg, #152b45 0%, #0d47a1 100%);
        color: white;
    }

    /* Ajustes visuales para la tabla */
    .tabla-goleadores th {
        color: #6c757d;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    .tabla-goleadores td {
        vertical-align: middle;
        border-bottom: 1px solid #f8f9fa;
    }
    .tabla-goleadores tr:hover td {
        background-color: #f8f9fa; 
    }
    
    /* Estilo para el número de posición */
    .numero-posicion {
        font-size: 1.2rem;
        font-weight: 900;
        color: #adb5bd;
    }
    .top-1 { color: #ffc107; } /* Dorado para el primer lugar */
    .top-2 { color: #a3a3a3; } /* Plata para el segundo */
    .top-3 { color: #cd7f32; } /* Bronce para el tercero */
</style>

<div class="container py-5">

    {{-- ========================================== --}}
    {{-- ENCABEZADO DE LA TABLA                     --}}
    {{-- ========================================== --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="caja-titulo-azul p-4 rounded-4 shadow-sm border-top border-4 border-warning text-center">
                <h2 class="h1 efecto-3d mb-1">Top Goleadores</h2>
                <p class="text-white-50 font-light mb-0" style="letter-spacing: 1px;">
                    <i class="fa-solid fa-futbol me-2"></i>Máximos anotadores - Temporada 2026
                </p>
            </div>
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- TABLA DE GOLEADORES                        --}}
    {{-- ========================================== --}}
    <section class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow border-0 rounded-4 overflow-hidden">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0 text-center tabla-goleadores">
                            <thead class="bg-light">
                                <tr>
                                    <th class="p-3 text-center" style="width: 50px;">#</th>
                                    <th class="p-3 text-start ps-4">Jugador</th>
                                    <th class="p-3 text-start">Club</th>
                                    <th class="p-3">PJ</th>
                                    <th class="p-3 text-dark fs-6" style="font-weight: 900;">Goles</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- 1er Lugar --}}
                                <tr>
                                    <td><span class="numero-posicion top-1">1</span></td>
                                    <td class="text-start font-bold ps-4">
                                        <img src="{{ asset('img-detalles/lewan.png') }}" width="45" height="45" style="object-fit: cover;" class="me-3 rounded-circle shadow-sm border border-2 border-warning" alt="Lewandowski">
                                        Robert Lewandowski
                                    </td>
                                    <td class="text-start text-secondary font-bold">
                                        <img src="{{ asset('img/barca.png') }}" width="24" class="me-2" alt="Barcelona">FC Barcelona
                                    </td>
                                    <td>28</td>
                                    <td class="font-bold text-primary fs-4">25</td>
                                </tr>

                                {{-- 2do Lugar --}}
                                <tr>
                                    <td><span class="numero-posicion top-2">2</span></td>
                                    <td class="text-start font-bold ps-4">
                                        <img src="{{ asset('img-detalles/vinicius.png') }}" width="45" height="45" style="object-fit: cover;" class="me-3 rounded-circle shadow-sm border border-2 border-secondary" alt="Vinícius">
                                        Vinícius Júnior
                                    </td>
                                    <td class="text-start text-secondary font-bold">
                                        <img src="{{ asset('img/realmadrid.png') }}" width="24" class="me-2" alt="Real Madrid">Real Madrid
                                    </td>
                                    <td>27</td>
                                    <td class="font-bold text-dark fs-5">22</td>
                                </tr>

                                {{-- 3er Lugar --}}
                                <tr>
                                    <td><span class="numero-posicion top-3">3</span></td>
                                    <td class="text-start font-bold ps-4">
                                        <img src="{{ asset('img-detalles/griezmann.png') }}" width="45" height="45" style="object-fit: cover;" class="me-3 rounded-circle shadow-sm border border-2" style="border-color: #cd7f32 !important;" alt="Griezmann">
                                        Antoine Griezmann
                                    </td>
                                    <td class="text-start text-secondary font-bold">
                                        <img src="{{ asset('img/atlmadrid.png') }}" width="24" class="me-2" alt="Atlético">Atlético Madrid
                                    </td>
                                    <td>28</td>
                                    <td class="font-bold text-dark fs-5">18</td>
                                </tr>

                                {{-- 4to Lugar --}}
                                <tr>
                                    <td><span class="numero-posicion">4</span></td>
                                    <td class="text-start font-bold ps-4">
                                        <img src="{{ asset('img/williams.jpg') }}" width="45" height="45" style="object-fit: cover;" class="me-3 rounded-circle shadow-sm" alt="Williams">
                                        Iñaki Williams
                                    </td>
                                    <td class="text-start text-secondary font-bold">
                                        <img src="{{ asset('img/athletic.png') }}" width="24" class="me-2" alt="Athletic">Athletic Club
                                    </td>
                                    <td>26</td>
                                    <td class="font-bold text-dark fs-5">15</td>
                                </tr>

                                {{-- 5to Lugar --}}
                                <tr>
                                    <td><span class="numero-posicion">5</span></td>
                                    <td class="text-start font-bold ps-4">
                                        <img src="{{ asset('img-detalles/hugo duro.png') }}" width="45" height="45" style="object-fit: cover;" class="me-3 rounded-circle shadow-sm" alt="Duro">
                                        Hugo Duro
                                    </td>
                                    <td class="text-start text-secondary font-bold">
                                        <img src="{{ asset('img/valencia.png') }}" width="24" class="me-2" alt="Valencia">Valencia CF
                                    </td>
                                    <td>28</td>
                                    <td class="font-bold text-dark fs-5">13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <button class="btn btn-outline-primary px-4 py-2 font-bold rounded-pill shadow-sm">
                    Ver clasificación completa <i class="fa-solid fa-arrow-right ms-2"></i>
                </button>
            </div>
            
        </div>
    </section>
</div>
@endsection