const chkTodos = document.getElementById('chk-todos');
const inputBuscador = document.getElementById('buscador-productos');

const IDs = [
    'chk-madrid', 'chk-barcelona', 'chk-atletico',
    'chk-camisetas', 'chk-sudaderas', 'chk-gorras',
    'chk-chica', 'chk-mediana', 'chk-grande'
];

document.addEventListener('DOMContentLoaded', () => {
    IDs.forEach(id => {
        const elemento = document.getElementById(id);
        if (elemento) elemento.addEventListener('change', ejecutarFiltros);
    });

    if (inputBuscador) {
        inputBuscador.addEventListener('input', ejecutarFiltros);
    }

    if (chkTodos) {
        chkTodos.addEventListener('change', gestionarVerTodos);
    }
});

function gestionarVerTodos() {
    if (chkTodos.checked) {
        IDs.forEach(id => { 
            const check = document.getElementById(id);
            if(check) check.checked = false; 
        });
        
        if(inputBuscador) inputBuscador.value = ""; 
        
        const articulos = document.getElementsByClassName('articulo');
        for (let i = 0; i < articulos.length; i++) {
            articulos[i].style.display = '';
        }
    }
}

function ejecutarFiltros() {
    if (this && this.id !== 'chk-todos') {
        if(chkTodos) chkTodos.checked = false;
    }
    
    const articulos = document.getElementsByClassName('articulo');
    const textoBusqueda = inputBuscador ? inputBuscador.value.toLowerCase() : "";

    const equipos = obtenerSeleccionados(['chk-madrid', 'chk-barcelona', 'chk-atletico']);
    const tipos = obtenerSeleccionados(['chk-camisetas', 'chk-sudaderas', 'chk-gorras']);
    const tallas = obtenerSeleccionados(['chk-chica', 'chk-mediana', 'chk-grande']);

    for (let i = 0; i < articulos.length; i++) {
        const item = articulos[i];
        const contenidoTarjeta = item.innerText.toLowerCase();
        
        const cumpleEquipo = equipos.length === 0 || equipos.some(c => item.classList.contains(c));
        const cumpleTipo = tipos.length === 0 || tipos.some(c => item.classList.contains(c));
        const cumpleTalla = tallas.length === 0 || tallas.some(c => item.classList.contains(c));
        const coincideNombre = textoBusqueda === "" || contenidoTarjeta.includes(textoBusqueda);

        if (cumpleEquipo && cumpleTipo && cumpleTalla && coincideNombre) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    }
}

function obtenerSeleccionados(grupoIds) {
    return grupoIds
        .filter(id => {
            const el = document.getElementById(id);
            return el && el.checked;
        })
        .map(id => id.replace('chk-', ''));
}