@extends('layouts.app')
@section('titulo', 'Tabla de Posiciones')

@section('contenido')
<main class="contenido-central">
    <section class="seccion-principal" style="flex: 1;">
        <h2>Tabla de Posiciones</h2>
        <table style="width: 100%; border-collapse: collapse; text-align: left;" border="1">
            <thead>
                <tr>
                    <th style="padding: 10px;">Posición</th>
                    <th style="padding: 10px;">Equipo</th>
                    <th style="padding: 10px;">Puntos</th>
                    <th style="padding: 10px;">Partidos Jugados</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 10px;">1</td><td>Equipo A</td><td>30</td><td>10</td></tr>
                <tr><td style="padding: 10px;">2</td><td>Equipo B</td><td>28</td><td>10</td></tr>
                <tr><td style="padding: 10px;">3</td><td>Equipo C</td><td>25</td><td>10</td></tr>
            </tbody>
        </table>
    </section>
</main>
@endsection