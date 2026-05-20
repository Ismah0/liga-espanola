@extends('layouts.app')
@section('titulo', 'Preguntas Frecuentes')

@section('contenido')

<style>
    /* Efecto 3D para el título */
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

    /* Fondo azul del título */
    .caja-titulo-azul {
        background: linear-gradient(135deg, #152b45 0%, #0d47a1 100%);
        color: white;
        border-top: 4px solid #ffc107;
        border-radius: 15px;
    }

    /* Ocultar respuestas por defecto (para tu JS) */
    .hidden {
        display: none !important;
    }

    /* Diseño corregido para las barras de preguntas */
    .faq-item {
        margin-bottom: 1rem;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .faq-btn {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f8f9fa; /* Gris clarito */
        border: 1px solid #dee2e6;
        padding: 1rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: #333;
        transition: background-color 0.3s ease;
    }

    .faq-btn:hover {
        background-color: #e2e6ea;
        cursor: pointer;
    }

    .faq-content {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-top: none;
        padding: 1.2rem 1.5rem;
        color: #555;
        font-size: 0.95rem;
        line-height: 1.5;
    }
</style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="accordion shadow-sm" id="accordionFAQ">
                
                <div class="accordion-item mb-3 border-0 rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-light text-dark font-bold collapsed" type="button" data-target="#collapseOne">
                            ¿Cuándo inicia la próxima temporada de La Liga?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" style="display: none;">
                        <div class="accordion-body text-muted">
                            La próxima temporada de La Liga Española tradicionalmente comienza a mediados del mes de agosto. Los calendarios oficiales se publican unas semanas antes del inicio.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0 rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-light text-dark font-bold collapsed" type="button" data-target="#collapseTwo">
                            ¿Cómo puedo comprar boletos para un partido?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" style="display: none;">
                        <div class="accordion-body text-muted">
                            Puedes adquirir tus entradas directamente a través de las páginas web oficiales de cada club local o mediante los distribuidores autorizados de La Liga.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0 rounded">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-light text-dark font-bold collapsed" type="button" data-target="#collapseThree">
                            ¿Qué equipos ascendieron este año?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" style="display: none;">
                        <div class="accordion-body text-muted">
                            Los equipos que lograron el ascenso a la Primera División para esta nueva temporada son anunciados oficialmente al concluir los playoffs de la Segunda División (LaLiga Hypermotion).
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const botones = document.querySelectorAll('.accordion-button');
        
        botones.forEach(boton => {
            boton.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const contenedor = document.querySelector(targetId);
                
                if (contenedor.style.display === 'block') {
                    contenedor.style.display = 'none';
                    this.classList.add('collapsed');
                } else {
                    document.querySelectorAll('.accordion-collapse').forEach(c => {
                        c.style.display = 'none';
                    });
                    document.querySelectorAll('.accordion-button').forEach(b => {
                        b.classList.add('collapsed');
                    });
                    
                    contenedor.style.display = 'block';
                    this.classList.remove('collapsed');
                }
            });
        });
    });
</script>
@endsection