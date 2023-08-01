
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_POST['user_id'];
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];


    // BD
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    // Verifica conexión
    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    // Actualizar
    $sql = "UPDATE users SET username='$username', password='$password', name='$name', lastname='$lastname', role='$role' WHERE id='$user_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Actualización exitosa.";
    } else {
        // Error
        echo "Error al actualizar los datos del usuario: " . mysqli_error($conn);
    }
    // Cerrar la conexión
    mysqli_close($conn);

    header("Location: tablaUsuarios.php");
    exit;
} else {
    header("Location: editarUsuario.php?id=" . $_POST['user_id'] . "&error=1");
    exit;
}
