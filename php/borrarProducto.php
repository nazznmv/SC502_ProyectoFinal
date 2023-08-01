

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["product_id"])) {

    $product_id = $_GET["product_id"];

    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error()); 
    }

    $sql = "DELETE FROM products WHERE product_id = $product_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: tablaProductos.php");
        exit();
    } else {
        echo "Error al borrar el producto: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
