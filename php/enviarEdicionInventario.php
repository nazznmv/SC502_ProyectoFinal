
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inventory_id = $_POST['inventory_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

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
    $sql = "UPDATE inventory SET product_id='$product_id', quantity='$quantity' WHERE inventory_id='$inventory_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Actualización exitosa.";
        // Redireccionar a la página de tabla de inventario
        header("Location: tablaInventario.php?success=Inventario actualizado exitosamente!");
        exit;
    } else {
        // Error
        echo "Error al actualizar los datos del inventario: " . mysqli_error($conn);
    }
    // Cerrar la conexión
    mysqli_close($conn);

    header("Location: editarInventario.php?inventory_id=" . $_POST['inventory_id'] . "&error=1");
    exit;
} else {
    header("Location: editarInventario.php?inventory_id=" . $_POST['inventory_id'] . "&error=1");
    exit;
}
?>
