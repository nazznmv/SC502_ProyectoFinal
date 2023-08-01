<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_POST['user_id'];
    $username = $_POST['uname'];
    //$password = $_POST['password']; // Contraseña actual del usuario
    $new_password = $_POST['new_password']; // Nueva contraseña del formulario
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];


    // BD
    $sname = "localhost";
    $uname = "root";
    $db_password = ""; // Cambia esta variable para evitar la colisión con la variable de contraseña anterior
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $db_password, $db_name);

    // Verifica conexión
    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    // Actualizar
    $sql = "UPDATE users SET username='$username', password='$new_password', name='$name', lastname='$lastname', role='$role' WHERE id='$user_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Actualización exitosa.";
        if ($role === 'admin') {
            // Redireccionar al usuario con rol "admin" a tablas.php
            header("Location: tablas.php");
        } else {
            // Redireccionar a los usuarios normales a myaccount.php
            header("Location: myAccount.php?success=Cuenta actualizada exitosamente!");
        }
        exit;
    } else {
        // Error
        echo "Error al actualizar los datos del usuario: " . mysqli_error($conn);
    }
    // Cerrar la conexión
    mysqli_close($conn);

    header("Location: editarUsuario.php?id=" . $_POST['user_id'] . "&error=1");
    exit;
} else {
    header("Location: editarUsuario.php?id=" . $_POST['user_id'] . "&error=1");
    exit;
}
?>
