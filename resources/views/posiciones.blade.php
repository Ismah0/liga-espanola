@extends('layouts.app')
@section('titulo', 'Tabla de Posiciones')

@section('contenido')
<div class="text-center mb-5">
    <h2 class="h2 font-bold text-primary">Tabla de Posiciones</h2>
    <p class="text-secondary">Clasificación actual de la temporada 2026.</p>
</div>

<section class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0 text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="p-3">Posición</th>
                                <th class="p-3 text-start">Equipo</th>
                                <th class="p-3">Partidos Jugados</th>
                                <th class="p-3">Puntos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-bold fs-5">1</td>
                                <td class="text-start font-bold">
                                    <img src="{{ asset('img/barca.png') }}" width="30" class="me-2" alt="Escudo">
                                    FC Barcelona
                                </td>
                                <td>27</td>
                                <td class="font-bold text-primary fs-5">67</td>
                            </tr>
                            <tr>
                                <td class="font-bold fs-5">2</td>
                                <td class="text-start font-bold">
                                    <img src="{{ asset('img/realmadrid.png') }}" width="30" class="me-2" alt="Escudo">
                                    Real Madrid
                                </td>
                                <td>27</td>
                                <td class="font-bold text-primary fs-5">63</td>
                            </tr>
                            <tr>
                                <td class="font-bold fs-5">3</td>
                                <td class="text-start font-bold">
                                    <img src="{{ asset('img/atlmadrid.png') }}" width="30" class="me-2" alt="Escudo">
                                    Atlético Madrid
                                </td>
                                <td>27</td>
                                <td class="font-bold text-primary fs-5">54</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection