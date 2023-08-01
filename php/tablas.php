
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/tablas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php 
    include 'navbar.php'; 
    ?>

    <main>
        <div class="contenedorAdminTablas">
            <h1>Administración de Tablas</h1>
        </div>
        <div class="listarTablas">
            <ul>
                <li><a href="tablaUsuarios.php">Usuarios</a></li>
                <li><a href="tablaMarcas.php">Marcas</a></li>
                <li><a href="tablaCategorias.php">Categorías</a></li>
                <li><a href="tablaInventario.php">Inventario</a></li>
                <li><a href="tablaProductos.php">Productos</a></li>
            </ul>
        </div>
    </main>


</body>

</html>
