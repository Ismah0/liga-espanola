document.addEventListener('DOMContentLoaded', function() {

    // 1. Enlace a componentes mediante ById (Checkbox Todos)
    let chkTodos = document.getElementById('chk-todos');

    // Checkboxes Categoría 1: Equipos
    let chkMadrid = document.getElementById('chk-madrid');
    let chkBarcelona = document.getElementById('chk-barcelona');
    let chkAtletico = document.getElementById('chk-atletico');

    // Checkboxes Categoría 2: Productos
    let chkCamisetas = document.getElementById('chk-camisetas');
    let chkSudaderas = document.getElementById('chk-sudaderas');
    let chkGorras = document.getElementById('chk-gorras');

    // Checkboxes Categoría 3: Tallas
    let chkChica = document.getElementById('chk-chica');
    let chkMediana = document.getElementById('chk-mediana');
    let chkGrande = document.getElementById('chk-grande');

    // 2. Función explícita principal
    function aplicarFiltros() {
        // Enlace a divisiones mediante ClassName
        let articulos = document.getElementsByClassName('articulo');

        // Revisamos qué categorías tienen al menos un check seleccionado
        let hayFiltroEquipo = chkMadrid.checked || chkBarcelona.checked || chkAtletico.checked;
        let hayFiltroProducto = chkCamisetas.checked || chkSudaderas.checked || chkGorras.checked;
        let hayFiltroTalla = chkChica.checked || chkMediana.checked || chkGrande.checked;

        // Regla: Si se selecciona "Todos" o no hay NADA seleccionado, mostramos todo
        let mostrarTodos = chkTodos.checked || (!hayFiltroEquipo && !hayFiltroProducto && !hayFiltroTalla);

        // Ciclo for básico para recorrer productos
        for (let i = 0; i < articulos.length; i++) {
            let item = articulos[i];

            // Rúbrica: "Una forma es, ocultar todos los productos y después ir mostrando..."
            item.classList.add('oculto'); 

            if (mostrarTodos) {
                item.classList.remove('oculto');
            } else {
                // Validación Categoría 1 (Inclusión OR)
                let pasaEquipo = false;
                if (!hayFiltroEquipo) {
                    pasaEquipo = true; // Si no hay equipos filtrados, pasa la prueba
                } else {
                    if (chkMadrid.checked && item.classList.contains('madrid')) pasaEquipo = true;
                    if (chkBarcelona.checked && item.classList.contains('barcelona')) pasaEquipo = true;
                    if (chkAtletico.checked && item.classList.contains('atletico')) pasaEquipo = true;
                }

                // Validación Categoría 2 (Inclusión OR)
                let pasaProducto = false;
                if (!hayFiltroProducto) {
                    pasaProducto = true;
                } else {
                    if (chkCamisetas.checked && item.classList.contains('camisetas')) pasaProducto = true;
                    if (chkSudaderas.checked && item.classList.contains('sudaderas')) pasaProducto = true;
                    if (chkGorras.checked && item.classList.contains('gorras')) pasaProducto = true;
                }

                // Validación Categoría 3 (Inclusión OR)
                let pasaTalla = false;
                if (!hayFiltroTalla) {
                    pasaTalla = true;
                } else {
                    if (chkChica.checked && item.classList.contains('chica')) pasaTalla = true;
                    if (chkMediana.checked && item.classList.contains('mediana')) pasaTalla = true;
                    if (chkGrande.checked && item.classList.contains('grande')) pasaTalla = true;
                }

                // Rúbrica: Exclusión AND entre diferentes categorías
                // El producto DEBE pasar las 3 pruebas para mostrarse
                if (pasaEquipo && pasaProducto && pasaTalla) {
                    item.classList.remove('oculto');
                }
            }
        }
    }

    // Funciones explícitas para manejar la interacción de los clicks
    function clickEnTodos() {
        if (chkTodos.checked) {
            // Si marco "Todos", desmarco los demás
            chkMadrid.checked = false; chkBarcelona.checked = false; chkAtletico.checked = false;
            chkCamisetas.checked = false; chkSudaderas.checked = false; chkGorras.checked = false;
            chkChica.checked = false; chkMediana.checked = false; chkGrande.checked = false;
        }
        aplicarFiltros();
    }

    function clickEnFiltro() {
        // Si hago clic en cualquier filtro, desmarco el de "Todos"
        chkTodos.checked = false;
        aplicarFiltros();
    }

    // 3. Agregar eventos mediante addEventListener
    chkTodos.addEventListener('change', clickEnTodos);
    
    chkMadrid.addEventListener('change', clickEnFiltro);
    chkBarcelona.addEventListener('change', clickEnFiltro);
    chkAtletico.addEventListener('change', clickEnFiltro);
    
    chkCamisetas.addEventListener('change', clickEnFiltro);
    chkSudaderas.addEventListener('change', clickEnFiltro);
    chkGorras.addEventListener('change', clickEnFiltro);
    
    chkChica.addEventListener('change', clickEnFiltro);
    chkMediana.addEventListener('change', clickEnFiltro);
    chkGrande.addEventListener('change', clickEnFiltro);

});