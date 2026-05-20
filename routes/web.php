<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('inicio'); });
Route::get('/equipos', function () { return view('equipos'); });
Route::get('/detalle/{equipo}', function ($equipo) {
    return view('detalle', ['equipoSeleccionado' => $equipo]);
})->name('detalle.equipo');
Route::get('/posiciones', function () { return view('posiciones'); });
Route::get('/calendario', function () { return view('calendario'); });
Route::get('/resultados', function () { return view('resultados'); });
Route::get('/goleadores', function () { return view('goleadores'); });
Route::get('/historia', function () { return view('historia'); });
Route::get('/noticias', function () { return view('noticias'); });
Route::get('/contacto', function () { return view('contacto'); });
Route::get('/faq', function () { return view('faq'); });
Route::get('/catalogo', function () { return view('catalogo'); });
