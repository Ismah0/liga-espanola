@extends('layouts.app')
@section('titulo', 'Top Goleadores')

@section('contenido')
<div class="text-center mb-5">
    <h2 class="h2 font-bold text-primary">Estadísticas de Máximos Goleadores</h2>
    <p class="text-secondary">Consulta las estadísticas más recientes de los jugadores con mayor número de goles.</p>
    <button class="btn btn-dark mt-2 font-bold">Ver más</button>
</div>

<section class="row justify-content-center">
    <div class="col-lg-10">
        <h3 class="h4 font-bold text-dark mb-4 text-center border-bottom pb-2">Tabla de Goleadores</h3>
        
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0 text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="p-3 text-start">Jugador</th>
                                <th class="p-3">Equipo</th>
                                <th class="p-3">Goles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start font-bold">
                                    <img src="{{ asset('img/messi perfil.jpg') }}" width="40" height="40" style="object-fit: cover;" class="me-3 rounded-circle shadow-sm" alt="Messi">
                                    Lionel Messi
                                </td>
                                <td class="text-secondary">FC Barcelona</td>
                                <td class="font-bold text-dark fs-5">40 goles</td>
                            </tr>
                            <tr>
                                <td class="text-start font-bold">
                                    <img src="{{ asset('img/cristiano perfil.jpg') }}" width="40" height="40" style="object-fit: cover;" class="me-3 rounded-circle shadow-sm" alt="Cristiano">
                                    Cristiano Ronaldo
                                </td>
                                <td class="text-secondary">Juventus</td>
                                <td class="font-bold text-dark fs-5">35 goles</td>
                            </tr>
                            <tr>
                                <td class="text-start font-bold">
                                    <img src="{{ asset('img/neymar perfil.jpg') }}" width="40" height="40" style="object-fit: cover;" class="me-3 rounded-circle shadow-sm" alt="Neymar">
                                    Neymar Jr.
                                </td>
                                <td class="text-secondary">PSG</td>
                                <td class="font-bold text-dark fs-5">30 goles</td>
                            </tr>
                            <tr>
                                <td class="text-start font-bold">
                                    <img src="{{ asset('img/mbappe.png') }}" width="40" height="40" style="object-fit: cover;" class="me-3 rounded-circle shadow-sm" alt="Mbappé">
                                    Kylian Mbappé
                                </td>
                                <td class="text-secondary">PSG</td>
                                <td class="font-bold text-dark fs-5">28 goles</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection