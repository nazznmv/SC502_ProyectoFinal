<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["brand_id"])) {

    $brand_id = $_GET["brand_id"];

    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error()); 
    }

    $sql = "DELETE FROM brands WHERE brand_id = $brand_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: tablaMarcas.php");
        exit();
    } else {
        echo "Error al borrar la marca: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
