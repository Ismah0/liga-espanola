@extends('layouts.app')
@section('titulo', 'Contacto')

@section('contenido')
<main class="contenido-central">
    <section class="seccion-principal" style="flex: 1;">
        <h2 style="text-align: center;">Formulario de Contacto</h2>
        
        <form style="display: flex; flex-direction: column; gap: 15px; max-width: 500px; margin: 0 auto; border: 1px solid #ccc; padding: 20px;">
            <div>
                <label>Nombre</label>
                <input type="text" style="width: 100%; padding: 8px;" placeholder="Ingresa tu nombre">
            </div>
            <div>
                <label>Correo Electrónico</label>
                <input type="email" style="width: 100%; padding: 8px;" placeholder="Ingresa tu correo electrónico">
            </div>
            <div>
                <label>Mensaje</label>
                <textarea style="width: 100%; padding: 8px; height: 100px;" placeholder="Escribe tu mensaje aquí"></textarea>
            </div>
            <button type="button" style="padding: 10px; background: #666; color: white; border: none; cursor: pointer;">Enviar</button>
        </form>
    </section>
</main>
@endsection