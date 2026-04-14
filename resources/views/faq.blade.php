@extends('layouts.app')
@section('titulo', 'Preguntas Frecuentes')

@section('contenido')
<div class="max-w-3xl mx-auto my-10 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-3xl font-bold text-center text-blue-900 mb-8">Preguntas Frecuentes (FAQ)</h2>

    <div class="space-y-4">
        
        <div class="border border-gray-200 rounded-md">
            <button id="p1" class="w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 font-semibold text-gray-800 focus:outline-none flex justify-between items-center transition-colors">
                <span>¿Cuándo inicia la próxima temporada de La Liga?</span>
                <span class="text-gray-500">▼</span>
            </button>
            <div id="r1" class="hidden px-4 py-3 text-gray-600 bg-white border-t border-gray-200">
                La próxima temporada de La Liga Española está programada para iniciar en la segunda semana de agosto del presente año.
            </div>
        </div>

        <div class="border border-gray-200 rounded-md">
            <button id="p2" class="w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 font-semibold text-gray-800 focus:outline-none flex justify-between items-center transition-colors">
                <span>¿Cómo puedo comprar boletos para un partido?</span>
                <span class="text-gray-500">▼</span>
            </button>
            <div id="r2" class="hidden px-4 py-3 text-gray-600 bg-white border-t border-gray-200">
                Los boletos se pueden adquirir a través de los sitios web oficiales de cada club o en nuestra sección de 'Boletos' una vez que el calendario oficial sea publicado.
            </div>
        </div>

        <div class="border border-gray-200 rounded-md">
            <button id="p3" class="w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 font-semibold text-gray-800 focus:outline-none flex justify-between items-center transition-colors">
                <span>¿Qué equipos ascendieron este año?</span>
                <span class="text-gray-500">▼</span>
            </button>
            <div id="r3" class="hidden px-4 py-3 text-gray-600 bg-white border-t border-gray-200">
                Este año damos la bienvenida a La Liga a los recién ascendidos: Valladolid, Leganés y Espanyol, quienes lograron su pase desde Segunda División.
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('js/faq.js') }}"></script>
@endsection