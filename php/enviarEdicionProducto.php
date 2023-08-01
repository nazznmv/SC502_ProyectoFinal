
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $brand_id = $_POST['brand_id'];
    $model = $_POST['model'];
    $image = $_POST['image'];

    // BD
    $sname = "localhost";
    $uname = "root";
    $db_password = ""; 
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $db_password, $db_name);

    // Verifica conexión
    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    // Actualizar
    $sql = "UPDATE products SET product_name='$product_name', category_id='$category_id', brand_id='$brand_id', model='$model', image='$image' WHERE product_id='$product_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Actualización exitosa.";
        // Redireccionar a la página de tabla de productos
        header("Location: tablaProductos.php?success=Producto actualizado exitosamente!");
        exit;
    } else {
        // Error
        echo "Error al actualizar los datos del producto: " . mysqli_error($conn);
    }
    // Cerrar la conexión
    mysqli_close($conn);

    header("Location: editarProducto.php?product_id=" . $_POST['product_id'] . "&error=1");
    exit;
} else {
    header("Location: editarProducto.php?product_id=" . $_POST['product_id'] . "&error=1");
    exit;
}
?>
