@extends('layouts.app')
@section('titulo', 'Catálogo Oficial')

@section('contenido')

<style>
    /* Efecto 3D para el título (Igual que posiciones) */
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

    /* Fondo azul que combina con tu navbar */
    .caja-titulo-azul {
        background: linear-gradient(135deg, #152b45 0%, #0d47a1 100%);
        color: white;
    }

    /* Ajustes visuales para la tabla */
    .tabla-goleadores th {
        color: #6c757d;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    .tabla-goleadores td {
        vertical-align: middle;
        border-bottom: 1px solid #f8f9fa;
    }
    .tabla-goleadores tr:hover td {
        background-color: #f8f9fa; 
    }
    
    /* Estilo para el número de posición */
    .numero-posicion {
        font-size: 1.2rem;
        font-weight: 900;
        color: #adb5bd;
    }
    .top-1 { color: #ffc107; } /* Dorado para el primer lugar */
    .top-2 { color: #a3a3a3; } /* Plata para el segundo */
    .top-3 { color: #cd7f32; } /* Bronce para el tercero */
</style>

<div class="container py-5">

    {{-- ========================================== --}}
    {{-- ENCABEZADO DE LA TABLA                     --}}
    {{-- ========================================== --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="caja-titulo-azul p-4 rounded-4 shadow-sm border-top border-4 border-warning text-center">
                <h2 class="h1 efecto-3d mb-1">Tienda Oficial de La Liga</h2>
                <p class="text-white-50 font-light mb-0" style="letter-spacing: 1px;">
                    <i class="fa-solid fa-futbol me-2"></i>catalogo de objetos de equipos de la liga
                </p>
            </div>
        </div>
    </div>
<style>
    .oculto {
        display: none !important;
    }
</style>

    <div class="row">
        <div class="col-md-3 bg-light p-4 rounded shadow-sm">
            <h4 class="font-bold mb-3">Filtros</h4>
            
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="chk-todos" checked>
                <label class="form-check-label font-bold text-primary" for="chk-todos">Ver Todos</label>
            </div>

            <h6 class="font-bold border-bottom pb-1">Equipos</h6>
            <div class="form-check"><input class="form-check-input filtro-check" type="checkbox" id="chk-madrid"> <label class="form-check-label">Real Madrid</label></div>
            <div class="form-check"><input class="form-check-input filtro-check" type="checkbox" id="chk-barcelona"> <label class="form-check-label">FC Barcelona</label></div>
            <div class="form-check mb-3"><input class="form-check-input filtro-check" type="checkbox" id="chk-atletico"> <label class="form-check-label">Atlético de Madrid</label></div>

            <h6 class="font-bold border-bottom pb-1">Tipo de Producto</h6>
            <div class="form-check"><input class="form-check-input filtro-check" type="checkbox" id="chk-camisetas"> <label class="form-check-label">Camisetas</label></div>
            <div class="form-check"><input class="form-check-input filtro-check" type="checkbox" id="chk-sudaderas"> <label class="form-check-label">Sudaderas</label></div>
            <div class="form-check mb-3"><input class="form-check-input filtro-check" type="checkbox" id="chk-gorras"> <label class="form-check-label">Gorras</label></div>

            <h6 class="font-bold border-bottom pb-1">Talla</h6>
            <div class="form-check"><input class="form-check-input filtro-check" type="checkbox" id="chk-chica"> <label class="form-check-label">Chica</label></div>
            <div class="form-check"><input class="form-check-input filtro-check" type="checkbox" id="chk-mediana"> <label class="form-check-label">Mediana</label></div>
            <div class="form-check"><input class="form-check-input filtro-check" type="checkbox" id="chk-grande"> <label class="form-check-label">Grande</label></div>
        </div>

        <div class="col-md-9">
            <div class="mb-4 shadow-sm p-3 bg-white rounded">
            <label for="buscador-nombre" class="font-bold text-primary mb-2">Buscador de Productos:</label>
            <div class="input-group">
            <span class="input-group-text bg-primary text-white">🔍</span>
            <input type="text" id="buscador-nombre" class="form-control border-primary" placeholder="Escribe el nombre del producto que buscas...">
        </div>
    </div>
            <div class="row g-4" id="contenedor-articulos">
                
                <div class="col-md-4 articulo madrid camisetas chica nombre-camiseta-madrid">
                        <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                            <img src="{{ asset('img-cat/playera-madrid.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                                <div class="card-body">
                                    <h6 class="font-bold">Camiseta Madrid</h6>
                                <p class="small text-muted">Talla: Chica</p>
                            </div>
                        </div>
                    </div>

                <div class="col-md-4 articulo barcelona camisetas mediana nombre-camiseta-barcelona">
                    <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                        <img src="{{ asset('img-cat/playera-barca.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                            <div class="card-body">
                             <h6 class="font-bold">Camiseta barcelona</h6>
                            <p class="small text-muted">Talla: Mediana</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 articulo atletico camisetas mediana nombre-camiseta-atletico">
                    <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                        <img src="{{ asset('img-cat/playera-atletico.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                            <div class="card-body">
                            <h6 class="font-bold">Camiseta atletico</h6>
                        <p class="small text-muted">Talla: Mediana</p>
                    </div>
                </div>
            </div>

                <div class="col-md-4 articulo madrid camisetas mediana nombre-camiseta-madrid">
                    <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                        <img src="{{ asset('img-cat/camiseta-madrid-m.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                        <div class="card-body"><h6 class="font-bold">Camiseta Madrid</h6><p class="small text-muted">Talla: Mediana</p></div>
                    </div>
                </div>

            <div class="col-md-4 articulo atletico sudaderas grande nombre-sudadera-atletico">
                <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                    <img src="{{ asset('img-cat/sudadera-atletico.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                <div class="card-body"><h6 class="font-bold">Sudadera Atlético</h6><p class="small text-muted">Talla: Grande</p></div>
            </div>
        </div>

            <div class="col-md-4 articulo atletico gorras mediana nombre-gorra-atletico">
                <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                    <img src="{{ asset('img-cat/gorra-atletico.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                <div class="card-body"><h6 class="font-bold">Gorra atletico</h6><p class="small text-muted">Talla: Mediana</p></div>
            </div>
        </div>

            <div class="col-md-4 articulo madrid gorras mediana nombre-gorra-madrid">
                <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                    <img src="{{ asset('img-cat/gorra-madrid.jfif') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                <div class="card-body"><h6 class="font-bold">Gorra Madrid</h6><p class="small text-muted">Talla: Mediana</p></div>
            </div>
        </div>

            <div class="col-md-4 articulo barcelona gorras mediana nombre-gorra-barcelona">
                <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                    <img src="{{ asset('img-cat/gorra-barca.png') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                <div class="card-body"><h6 class="font-bold">Gorra Barcelona</h6><p class="small text-muted">Talla: Mediana</p></div>
            </div>
        </div>

            <div class="col-md-4 articulo barcelona sudaderas chica nombre-sudadera-barcelona">
                <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                    <img src="{{ asset('img-cat/sudadera-barca.png') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                <div class="card-body"><h6 class="font-bold">Sudadera Barcelona</h6><p class="small text-muted">Talla: Chica</p></div>
            </div>
        </div>

            <div class="col-md-4 articulo madrid sudaderas grande nombre-sudadera-madrid">
                <div class="card efecto-girar efecto-hover h-100 shadow-sm border-0 text-center">
                    <img src="{{ asset('img-cat/sudadera-madrid.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                <div class="card-body"><h6 class="font-bold">Sudadera Madrid</h6><p class="small text-muted">Talla: Grande</p></div>
            </div>
        </div>
                
    </div>
</div>
</div>
</div>

<script src="{{ asset('js/catalogo.js') }}"></script>
@endsection
