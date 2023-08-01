
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["inventory_id"])) {

    $inventory_id = $_GET["inventory_id"];

    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM inventory WHERE inventory_id = $inventory_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: tablaInventario.php");
        exit();
    } else {
        echo "Error al borrar el registro del inventario: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
