@extends('layouts.app')
@section('titulo', 'Contáctanos')

@section('contenido')
<section class="row justify-content-center mt-5">
    <div class="col-md-8 col-lg-6">
        
        <div class="card shadow border-0">
            <div class="card-body p-5">
                
                <h2 class="h3 font-bold text-center mb-3 text-dark">Contáctanos</h2>
                <p class="text-center text-secondary mb-4">Estamos aquí para ayudarte. Completa el formulario a continuación.</p>
                
                <form action="#" method="POST">
                    
                    <div class="mb-3">
                        <label for="nombre" class="form-label font-bold text-dark">Nombre</label>
                        <input type="text" class="form-control p-2" id="nombre" placeholder="Ingresa tu nombre">
                    </div>
                    
                    <div class="mb-3">
                        <label for="correo" class="form-label font-bold text-dark">Correo Electrónico</label>
                        <input type="email" class="form-control p-2" id="correo" placeholder="Ingresa tu correo electrónico">
                    </div>
                    
                    <div class="mb-4">
                        <label for="mensaje" class="form-label font-bold text-dark">Mensaje</label>
                        <textarea class="form-control p-2" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí"></textarea>
                        <div class="form-text text-secondary small mt-1">Tu mensaje debe tener al menos 10 caracteres</div>
                    </div>
                    
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-dark btn-lg font-bold">Enviar</button>
                    </div>
                    
                </form>

            </div>
        </div>

    </div>
</section>
@endsection