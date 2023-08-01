
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];

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
    $sql = "UPDATE categories SET category_name='$category_name' WHERE category_id='$category_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Actualización exitosa.";
        // Redireccionar a la página de tabla de categorías
        header("Location: tablaCategorias.php?success=Categoría actualizada exitosamente!");
        exit;
    } else {
        // Error
        echo "Error al actualizar los datos de la categoría: " . mysqli_error($conn);
    }
    // Cerrar la conexión
    mysqli_close($conn);

    header("Location: editarCategoria.php?category_id=" . $_POST['category_id'] . "&error=1");
    exit;
} else {
    header("Location: editarCategoria.php?category_id=" . $_POST['category_id'] . "&error=1");
    exit;
}
?>
