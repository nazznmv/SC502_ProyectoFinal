

const urlParams = new URLSearchParams(window.location.search);
const categoriaSeleccionada = urlParams.get('categoria');


function filtrarProductosPorCategoria(categoria) {
    const productos = document.querySelectorAll('.grid-item');

    productos.forEach((producto) => {
        if (categoria === 'todos' || producto.classList.contains(categoria)) {
            producto.style.display = 'block';
        } else {
            producto.style.display = 'none';
        }
    });
}


function aplicarFiltroInicial() {
    filtrarProductosPorCategoria(categoriaSeleccionada);
}


document.addEventListener('DOMContentLoaded', aplicarFiltroInicial);

const marcas = document.querySelectorAll('.marca'); 


marcas.forEach((marca) => {
    marca.addEventListener('click', (event) => {
        event.preventDefault();
        const marcaSeleccionada = marca.dataset.marca;

        // Ocultar todos los productos
        const productos = document.querySelectorAll('.grid-item');
        productos.forEach((producto) => {
            producto.style.display = 'none';
        });

        // todos de la categoría y marca seleccionada
        if (marcaSeleccionada === 'todos') {
            // todos los de la categoría seleccionada
            filtrarProductosPorCategoria(categoriaSeleccionada);
        } else {
            // Mostrar solo de la categoría y marca seleccionada
            const productosMarca = document.querySelectorAll('.grid-item.' + marcaSeleccionada);
            productosMarca.forEach((producto) => {
                if (categoriaSeleccionada === 'todos' || producto.classList.contains(categoriaSeleccionada)) {
                    producto.style.display = 'block';
                }
            });
        }
    });
});
