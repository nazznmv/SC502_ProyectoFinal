
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
    <div class="contenedorTabla">
    <h1>Tabla de Productos</h1>
    <div class="boton-agregar">
        <a href="">Agregar nuevo</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre del Producto</th>
            <th>Categoría</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Imagen</th> <!-- Nueva columna para la imagen -->
            <th>Editar/Eliminar</th>
        </tr>
        <?php
        // Conexión
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "SOLEMATE"; 

        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        // conexión fue exitosa ?
        if (!$conn) {
            die("Error en la conexión: " . mysqli_connect_error());
        }

        // obtener los datos de los productos con información de la categoría y la marca
        $sql = "SELECT products.product_id, products.product_name, categories.category_name, brands.brand_name, products.model, products.image 
        FROM products INNER JOIN categories ON products.category_id = categories.category_id
        INNER JOIN brands ON products.brand_id = brands.brand_id
        ORDER BY product_id";
        $result = mysqli_query($conn, $sql);

        // Verificar si hay filas
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["product_id"] . "</td>";
                echo "<td>" . $row["product_name"] . "</td>";
                echo "<td>" . $row["category_name"] . "</td>";
                echo "<td>" . $row["brand_name"] . "</td>";
                echo "<td>" . $row["model"] . "</td>";
                echo "<td><img src='" . $row["image"] . "' alt='Imagen del Producto' height='100'></td>";
                echo "<td>";
                echo "<a href='editarProducto.php?product_id=" . $row["product_id"] . "'>Editar</a>";
                echo " | ";
                echo "<a href='borrarProducto.php?product_id=" . $row["product_id"] . "'>Borrar</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No se encontraron productos</td></tr>";
        }

        // Cerrar la conexión
        mysqli_close($conn);
        ?>
    </table>
    </div>
    
</body>
</html>
