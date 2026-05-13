@extends('layouts.app')
@section('titulo', 'Tabla de Posiciones')

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

   
    .caja-titulo-azul {
        background: linear-gradient(135deg, #152b45 0%, #0d47a1 100%);
        color: white;
    }

    
    .forma-icono {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        color: white;
        font-size: 12px;
        font-weight: bold;
        margin: 0 2px;
    }
    
    
    .forma-g { background-color: #28a745; } /* Verde */
    .forma-e { background-color: #adb5bd; } /* Gris */
    .forma-p { background-color: #dc3545; } /* Rojo */
    
    
    .tabla-posiciones th {
        color: #6c757d;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    .tabla-posiciones td {
        vertical-align: middle;
        border-bottom: 1px solid #f8f9fa;
    }
    .tabla-posiciones tr:hover td {
        background-color: #f8f9fa; 
    }
</style>

<div class="container py-5">
    
    {{-- ========================================== --}}
    {{-- ENCABEZADO DE LA TABLA                     --}}
    {{-- ========================================== --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="caja-titulo-azul p-4 rounded-4 shadow-sm border-top border-4 border-warning text-center">
                <h2 class="h1 efecto-3d mb-1">Tabla de Posiciones</h2>
                <p class="text-white-50 font-light mb-0" style="letter-spacing: 1px;">
                    <i class="fa-solid fa-calendar-days me-2"></i>Clasificación Actual - Temporada 2026
                </p>
            </div>
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- TABLA DE POSICIONES                        --}}
    {{-- ========================================== --}}
    <section class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow border-0 rounded-4 overflow-hidden">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0 text-center tabla-posiciones">
                            <thead class="bg-light">
                                <tr>
                                    <th class="p-3 text-start ps-4">Club</th>
                                    <th class="p-3">PJ</th>
                                    <th class="p-3">G</th>
                                    <th class="p-3">E</th>
                                    <th class="p-3">P</th>
                                    <th class="p-3">GF</th>
                                    <th class="p-3">GC</th>
                                    <th class="p-3">DG</th>
                                    <th class="p-3 text-dark fs-6" style="font-weight: 900;">Pts</th>
                                    <th class="p-3">Últimos 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- 1. BARCELONA --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">2</span>
                                        <img src="{{ asset('img/barca.png') }}" width="28" class="me-2" alt="Barcelona">
                                        FC Barcelona
                                    </td>
                                    <td>28</td><td>22</td><td>5</td><td>1</td><td>64</td><td>20</td><td>44</td>
                                    <td class="font-bold fs-5 text-primary">71</td>
                                    <td>
                                        <span class="forma-icono forma-g">✓</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-e">-</span>
                                    </td>
                                </tr>

                                {{-- 2. REAL MADRID --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">1</span>
                                        <img src="{{ asset('img/realmadrid.png') }}" width="28" class="me-2" alt="Real Madrid">
                                        Real Madrid
                                    </td>
                                    <td>28</td><td>21</td><td>5</td><td>2</td><td>60</td><td>25</td><td>35</td>
                                    <td class="font-bold fs-5 text-primary">68</td>
                                    <td>
                                        <span class="forma-icono forma-g">✓</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-g">✓</span>
                                    </td>
                                </tr>

                                {{-- 3. ATLÉTICO DE MADRID --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">3</span>
                                        <img src="{{ asset('img/atlmadrid.png') }}" width="28" class="me-2" alt="Atlético">
                                        Atlético Madrid
                                    </td>
                                    <td>28</td><td>18</td><td>4</td><td>6</td><td>52</td><td>30</td><td>22</td>
                                    <td class="font-bold fs-5 text-primary">58</td>
                                    <td>
                                        <span class="forma-icono forma-e">-</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-g">✓</span>
                                    </td>
                                </tr>

                                {{-- 4. ATHLETIC BILBAO --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">4</span>
                                        <img src="{{ asset('img/athletic.png') }}" width="28" class="me-2" alt="Athletic">
                                        Athletic Club
                                    </td>
                                    <td>28</td><td>16</td><td>8</td><td>4</td><td>45</td><td>26</td><td>19</td>
                                    <td class="font-bold fs-5 text-primary">56</td>
                                    <td>
                                        <span class="forma-icono forma-g">✓</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-g">✓</span>
                                    </td>
                                </tr>

                                {{-- 5. REAL SOCIEDAD --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">5</span>
                                        <img src="{{ asset('img/realsociedad.png') }}" width="28" class="me-2" alt="Real Sociedad">
                                        Real Sociedad
                                    </td>
                                    <td>28</td><td>12</td><td>10</td><td>6</td><td>38</td><td>28</td><td>10</td>
                                    <td class="font-bold fs-5">46</td>
                                    <td>
                                        <span class="forma-icono forma-p">✕</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-g">✓</span>
                                    </td>
                                </tr>

                                {{-- 6. REAL BETIS --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">6</span>
                                        <img src="{{ asset('img/betis.png') }}" width="28" class="me-2" alt="Betis">
                                        Real Betis
                                    </td>
                                    <td>28</td><td>10</td><td>12</td><td>6</td><td>34</td><td>31</td><td>3</td>
                                    <td class="font-bold fs-5">42</td>
                                    <td>
                                        <span class="forma-icono forma-e">-</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-g">✓</span>
                                    </td>
                                </tr>

                                {{-- 7. VALENCIA CF --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">7</span>
                                        <img src="{{ asset('img/valencia.png') }}" width="28" class="me-2" alt="Valencia">
                                        Valencia CF
                                    </td>
                                    <td>28</td><td>11</td><td>8</td><td>9</td><td>32</td><td>32</td><td>0</td>
                                    <td class="font-bold fs-5">41</td>
                                    <td>
                                        <span class="forma-icono forma-g">✓</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-g">✓</span>
                                    </td>
                                </tr>

                                {{-- 8. LAS PALMAS --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">8</span>
                                        <img src="{{ asset('img/udlaspalmas.png') }}" width="28" class="me-2" alt="Las Palmas">
                                        UD Las Palmas
                                    </td>
                                    <td>28</td><td>10</td><td>7</td><td>11</td><td>29</td><td>32</td><td>-3</td>
                                    <td class="font-bold fs-5">37</td>
                                    <td>
                                        <span class="forma-icono forma-e">-</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-p">✕</span>
                                    </td>
                                </tr>

                                {{-- 9. MALLORCA --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">9</span>
                                        <img src="{{ asset('img/mallorca.png') }}" width="28" class="me-2" alt="Mallorca">
                                        RCD Mallorca
                                    </td>
                                    <td>28</td><td>6</td><td>12</td><td>10</td><td>25</td><td>35</td><td>-10</td>
                                    <td class="font-bold fs-5">30</td>
                                    <td>
                                        <span class="forma-icono forma-p">✕</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-g">✓</span><span class="forma-icono forma-p">✕</span>
                                    </td>
                                </tr>

                                {{-- 10. SEVILLA FC --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">10</span>
                                        <img src="{{ asset('img/sevilla.png') }}" width="28" class="me-2" alt="Sevilla">
                                        Sevilla FC
                                    </td>
                                    <td>28</td><td>6</td><td>10</td><td>12</td><td>35</td><td>42</td><td>-7</td>
                                    <td class="font-bold fs-5">28</td>
                                    <td>
                                        <span class="forma-icono forma-g">✓</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-e">-</span>
                                    </td>
                                </tr>

                                {{-- 11. ELCHE CF --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">11</span>
                                        <img src="{{ asset('img/elche.png') }}" width="28" class="me-2" alt="Elche">
                                        Elche CF
                                    </td>
                                    <td>28</td><td>5</td><td>8</td><td>15</td><td>22</td><td>40</td><td>-18</td>
                                    <td class="font-bold fs-5 text-danger">23</td>
                                    <td>
                                        <span class="forma-icono forma-p">✕</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-g">✓</span>
                                    </td>
                                </tr>

                                {{-- 12. GRANADA CF --}}
                                <tr>
                                    <td class="text-start fs-6 ps-4 font-bold">
                                        <span class="me-3 text-secondary">12</span>
                                        <img src="{{ asset('img/granada.png') }}" width="28" class="me-2" alt="Granada">
                                        Granada CF
                                    </td>
                                    <td>28</td><td>2</td><td>8</td><td>18</td><td>28</td><td>56</td><td>-28</td>
                                    <td class="font-bold fs-5 text-danger">14</td>
                                    <td>
                                        <span class="forma-icono forma-p">✕</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-e">-</span><span class="forma-icono forma-p">✕</span><span class="forma-icono forma-p">✕</span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection