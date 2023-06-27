


const marcas = document.querySelectorAll('.marca'); // Obtener todos los enlaces de marca

// Agregar evento click a cada enlace de marca
marcas.forEach((marca) => {
    marca.addEventListener('click', (event) => {
        event.preventDefault();
        const marcaSeleccionada = event.target.dataset.marca;

        // Ocultar todos
        const productos = document.querySelectorAll('.grid-item');
        productos.forEach((producto) => {
            producto.style.display = 'none';
        });

        // Mostrar todos
        if (marcaSeleccionada === 'todos') {
            // Mostrar todos los productos si se selecciona 'Todos'
            productos.forEach((producto) => {
                producto.style.display = 'block';
            });
        } else {
            // Mostrar solo marca seleccionada
            const productosMarca = document.querySelectorAll('.grid-item.' + marcaSeleccionada);
            productosMarca.forEach((producto) => {
                producto.style.display = 'block';
            });
        }
    });
});
