// 1. Enlaces a los elementos principales
const chkTodos = document.getElementById('chk-todos');
const inputBuscador = document.getElementById('buscador-nombre');

// Lista de todos los IDs de tus checkboxes
const IDs = [
    'chk-madrid', 'chk-barcelona', 'chk-atletico',
    'chk-camisetas', 'chk-sudaderas', 'chk-gorras',
    'chk-chica', 'chk-mediana', 'chk-grande'
];

// 2. Asignar eventos cuando la página cargue
document.addEventListener('DOMContentLoaded', () => {
    // Evento para cada checkbox (cuando lo marcas/desmarcas)
    IDs.forEach(id => {
        const elemento = document.getElementById(id);
        if (elemento) elemento.addEventListener('change', ejecutarFiltros);
    });

    // Evento para el buscador (cuando escribes)
    if (inputBuscador) {
        inputBuscador.addEventListener('input', ejecutarFiltros);
    }

    // Evento para el checkbox "Ver Todos"
    if (chkTodos) {
        chkTodos.addEventListener('change', gestionarVerTodos);
    }
});

// Función para el botón "Ver Todos"
function gestionarVerTodos() {
    if (chkTodos.checked) {
        // 1. Desmarcar todos los demás checks
        IDs.forEach(id => { 
            const check = document.getElementById(id);
            if(check) check.checked = false; 
        });
        
        // 2. Limpiar el buscador
        if(inputBuscador) inputBuscador.value = ""; 
        
        // 3. Mostrar todos los artículos
        const articulos = document.getElementsByClassName('articulo');
        for (let i = 0; i < articulos.length; i++) {
            articulos[i].style.display = 'block';
        }
    }
}

// Función principal que filtra los productos
function ejecutarFiltros() {
    // Si marcamos un filtro o escribimos, quitamos la palomita de "Ver Todos"
    if (this.id !== 'chk-todos') chkTodos.checked = false;
    
    // Obtenemos los artículos mediante ClassName (Requisito de tu profesor)
    const articulos = document.getElementsByClassName('articulo');
    
    // Texto que el usuario escribió (en minúsculas)
    const textoBusqueda = inputBuscador ? inputBuscador.value.toLowerCase() : "";

    // Obtenemos qué filtros están marcados
    const equipos = obtenerSeleccionados(['chk-madrid', 'chk-barcelona', 'chk-atletico']);
    const tipos = obtenerSeleccionados(['chk-camisetas', 'chk-sudaderas', 'chk-gorras']);
    const tallas = obtenerSeleccionados(['chk-chica', 'chk-mediana', 'chk-grande']);

    // Recorremos todos los artículos para ver cuáles mostrar y cuáles ocultar
    for (let i = 0; i < articulos.length; i++) {
        const item = articulos[i];
        
        // Lógica 1: ¿Cumple con los checkboxes?
        const cumpleEquipo = equipos.length === 0 || equipos.some(c => item.classList.contains(c));
        const cumpleTipo = tipos.length === 0 || tipos.some(c => item.classList.contains(c));
        const cumpleTalla = tallas.length === 0 || tallas.some(c => item.classList.contains(c));

        // Lógica 2: ¿Cumple con el nombre buscado? (Requisito de tu profesor)
        let coincideNombre = false;
        const clases = Array.from(item.classList); // Leemos las clases del div
        clases.forEach(clase => {
            // Buscamos la clase que empieza con 'nombre-' y vemos si incluye lo escrito
            if (clase.startsWith('nombre-') && clase.includes(textoBusqueda)) {
                coincideNombre = true;
            }
        });

        // Decisión final: Mostrar (block) u Ocultar (none)
        if (cumpleEquipo && cumpleTipo && cumpleTalla && coincideNombre) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    }
}

// Función auxiliar para saber qué checkboxes están marcados
function obtenerSeleccionados(grupoIds) {
    return grupoIds
        .filter(id => {
            const el = document.getElementById(id);
            return el && el.checked;
        })
        .map(id => id.replace('chk-', '')); // Le quitamos el 'chk-' para que coincida con la clase
}