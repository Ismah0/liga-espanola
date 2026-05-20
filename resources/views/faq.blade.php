@extends('layouts.app')
@section('titulo', 'Preguntas Frecuentes')

@section('contenido')

<style>
    /* Estilos del Banner Azul */
    .efecto-3d {
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 4px;
        color: #ffffff;
        text-shadow: 2px 2px 0px #0b5ed7, 4px 4px 0px rgba(0, 0, 0, 0.4);
        display: inline-block;
        margin-bottom: 5px;
    }
    .caja-titulo-azul {
        background: linear-gradient(135deg, #152b45 0%, #0d47a1 100%);
        color: white;
    }

    /* Estilos de las preguntas para que se vean como tu diseño original */
    .pregunta-btn {
        background-color: #f1f3f5; /* Gris clarito original */
        border: 1px solid #e9ecef;
        border-radius: 8px;
        color: #333;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        text-align: left;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.04);
    }
    .pregunta-btn:hover {
        background-color: #e9ecef;
    }
    
    /* Contenido oculto de la respuesta */
    .respuesta-body {
        background-color: #ffffff;
        border: 1px solid #e9ecef;
        border-top: none;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        padding: 15px 20px;
        display: none; /* Oculto por defecto */
        color: #6c757d;
    }

    /* El triangulito */
    .icono-despliegue {
        font-size: 0.8rem;
        transition: transform 0.3s ease;
        color: #6c757d;
    }
    .rotado {
        transform: rotate(180deg); /* Voltea el triángulo al abrir */
    }
</style>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="caja-titulo-azul p-4 rounded-4 shadow-sm border-top border-4 border-warning text-center">
                <h2 class="h1 efecto-3d mb-1">PREGUNTAS FRECUENTES</h2>
                <p class="text-white-50 font-light mb-0" style="letter-spacing: 1px;">
                    Todo lo que necesitas saber sobre el torneo
                </p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="mb-3">
                <button class="pregunta-btn" data-target="#resp1">
                    <span>¿Cuándo inicia la próxima temporada de La Liga?</span>
                    <span class="icono-despliegue">▼</span>
                </button>
                <div id="resp1" class="respuesta-body">
                    La próxima temporada de La Liga Española tradicionalmente comienza a mediados del mes de agosto. Los calendarios oficiales se publican unas semanas antes del inicio.
                </div>
            </div>

            <div class="mb-3">
                <button class="pregunta-btn" data-target="#resp2">
                    <span>¿Cómo puedo comprar boletos para un partido?</span>
                    <span class="icono-despliegue">▼</span>
                </button>
                <div id="resp2" class="respuesta-body">
                    Puedes adquirir tus entradas directamente a través de las páginas web oficiales de cada club local o mediante los distribuidores autorizados de La Liga.
                </div>
            </div>

            <div class="mb-3">
                <button class="pregunta-btn" data-target="#resp3">
                    <span>¿Qué equipos ascendieron este año?</span>
                    <span class="icono-despliegue">▼</span>
                </button>
                <div id="resp3" class="respuesta-body">
                    Los equipos que lograron el ascenso a la Primera División para esta nueva temporada son anunciados oficialmente al concluir los playoffs de la Segunda División.
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-5 text-center">
        <div class="col-12">
            <p class="text-muted mb-3">¿Aún tienes dudas? Contáctanos directamente.</p>
            <a href="/contacto" class="btn btn-dark rounded-pill px-4 py-2 font-bold shadow">Enviar un mensaje</a>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const botones = document.querySelectorAll('.pregunta-btn');

        botones.forEach(boton => {
            boton.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const respuesta = document.querySelector(targetId);
                const icono = this.querySelector('.icono-despliegue');

                // Si ya está abierto, lo cerramos
                if (respuesta.style.display === 'block') {
                    respuesta.style.display = 'none';
                    icono.classList.remove('rotado');
                    this.style.borderBottomLeftRadius = '8px';
                    this.style.borderBottomRightRadius = '8px';
                } 
                // Si está cerrado, lo abrimos
                else {
                    // Opcional: Cerrar los demás al abrir uno nuevo
                    document.querySelectorAll('.respuesta-body').forEach(r => r.style.display = 'none');
                    document.querySelectorAll('.icono-despliegue').forEach(i => i.classList.remove('rotado'));
                    document.querySelectorAll('.pregunta-btn').forEach(b => {
                        b.style.borderBottomLeftRadius = '8px';
                        b.style.borderBottomRightRadius = '8px';
                    });

                    // Abrir el seleccionado
                    respuesta.style.display = 'block';
                    icono.classList.add('rotado');
                    // Le quitamos las esquinas redondas de abajo al botón para que se una a la respuesta
                    this.style.borderBottomLeftRadius = '0px';
                    this.style.borderBottomRightRadius = '0px';
                }
            });
        });
    });
</script>
@endsection