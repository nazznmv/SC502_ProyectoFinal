<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $brand_id = $_POST['brand_id'];
    $brand_name = $_POST['brand_name'];

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
    $sql = "UPDATE brands SET brand_name='$brand_name' WHERE brand_id='$brand_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Actualización exitosa.";
        // Redireccionar a la página de tabla de marcas
        header("Location: tablaMarcas.php?success=Marca actualizada exitosamente!");
        exit;
    } else {
        // Error
        echo "Error al actualizar los datos de la marca: " . mysqli_error($conn);
    }
    // Cerrar la conexión
    mysqli_close($conn);

    header("Location: editarMarca.php?brand_id=" . $_POST['brand_id'] . "&error=1");
    exit;
} else {
    header("Location: editarMarca.php?brand_id=" . $_POST['brand_id'] . "&error=1");
    exit;
}
?>
