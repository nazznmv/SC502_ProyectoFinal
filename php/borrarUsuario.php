<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {

    $user_id = $_GET["id"];

    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error()); //Termina ejecución del script si error
    }

    $sql = "DELETE FROM users WHERE id = $user_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: tablaUsuarios.php");
        exit();
    } else {
        echo "Error al borrar el usuario: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
