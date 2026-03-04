@extends('layouts.app')
@section('titulo', 'Top Goleadores')

@section('contenido')
<main class="contenido-central">
    <section class="seccion-principal" style="flex: 1;">
        <h2>Estadísticas de Máximos Goleadores</h2>
        <table style="width: 100%; border-collapse: collapse; text-align: left;" border="1">
            <thead>
                <tr>
                    <th style="padding: 10px;">Jugador</th>
                    <th style="padding: 10px;">Equipo</th>
                    <th style="padding: 10px;">Goles</th>
                </tr>
            </thead>
            <tbody>
                <tr><td style="padding: 10px;">Lionel Messi</td><td>FC Barcelona</td><td>40</td></tr>
                <tr><td style="padding: 10px;">Cristiano Ronaldo</td><td>Juventus</td><td>35</td></tr>
                <tr><td style="padding: 10px;">Neymar Jr.</td><td>PSG</td><td>30</td></tr>
            </tbody>
        </table>
    </section>
</main>
@endsection