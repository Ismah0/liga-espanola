@extends('layouts.app')
@section('titulo', 'Catálogo Oficial')

@section('contenido')
<style>
    .oculto {
        display: none !important;
    }
</style>

<div class="container my-5">
    <h2 class="text-center font-bold text-primary mb-4">Tienda Oficial de La Liga</h2>

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
            <div class="row g-4" id="contenedor-articulos">
                
                <div class="col-md-4 articulo madrid camisetas chica">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <img src="{{ asset('img/playera-madrid.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                        <div class="card-body"><h6 class="font-bold">Camiseta Madrid</h6><p class="small text-muted">Talla: Chica</p></div>
                    </div>
                </div>

                <div class="col-md-4 articulo barcelona camisetas mediana">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <img src="{{ asset('img/playera-barca.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                        <div class="card-body"><h6 class="font-bold">Camiseta Barcelona</h6><p class="small text-muted">Talla: Mediana</p></div>
                    </div>
                </div>

                <div class="col-md-4 articulo atletico sudaderas grande">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <img src="{{ asset('img/playera-barca.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                        <div class="card-body"><h6 class="font-bold">Sudadera Atlético</h6><p class="small text-muted">Talla: Grande</p></div>
                    </div>
                </div>

                <div class="col-md-4 articulo madrid gorras mediana">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <img src="{{ asset('img/gorra-atletico.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                        <div class="card-body"><h6 class="font-bold">Gorra Madrid</h6><p class="small text-muted">Talla: Mediana</p></div>
                    </div>
                </div>

                <div class="col-md-4 articulo barcelona sudaderas chica">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <img src="{{ asset('img/playera-barca.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                        <div class="card-body"><h6 class="font-bold">Sudadera Barcelona</h6><p class="small text-muted">Talla: Chica</p></div>
                    </div>
                </div>

                <div class="col-md-4 articulo madrid sudaderas grande">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <img src="{{ asset('img/playera-madrid.jpg') }}" class="card-img-top p-3" style="height:150px; object-fit:contain;">
                        <div class="card-body"><h6 class="font-bold">Sudadera Madrid</h6><p class="small text-muted">Talla: Grande</p></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/catalogo.js') }}"></script>
@endsection