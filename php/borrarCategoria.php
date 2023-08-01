
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["category_id"])) {

    $category_id = $_GET["category_id"];

    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error()); 
    }

    $sql = "DELETE FROM categories WHERE category_id = $category_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: tablaCategorias.php");
        exit();
    } else {
        echo "Error al borrar la categoría: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
