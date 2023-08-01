<?php
session_start(); // Asegurarse de que session_start() esté presente en la página

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recuperar los datos enviados desde el formulario de edición
    $user_id = $_POST['user_id'];
    $username = $_POST['uname'];
    $new_password = $_POST['new_password'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];

    // BD
    $sname = "localhost";
    $uname = "root";
    $db_password = ""; 
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $db_password, $db_name);

    // Verificar conexión
    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    // Actualizar información del usuario
    if (!empty($new_password)) {
        // Si se proporcionó una nueva contraseña, actualizar también la contraseña
        $sql = "UPDATE users SET username='$username', password='$new_password', name='$name', lastname='$lastname', role='$role' WHERE id='$user_id'";
    } else {
        // Si no se proporcionó una nueva contraseña, actualizar el resto de la información sin modificar la contraseña
        $sql = "UPDATE users SET username='$username', name='$name', lastname='$lastname', role='$role' WHERE id='$user_id'";
    }

    if (mysqli_query($conn, $sql)) {
        // Actualización exitosa
        if ($_SESSION['role'] === 'admin') {
            // Si el usuario es "admin", redirigir a tablaUsuarios.php
            header("Location: tablaUsuarios.php?success=Usuario actualizado exitosamente!");
        } else {
            // Si el usuario no es "admin", redirigir a myaccount.php con el mensaje de éxito
            header("Location: myaccount.php?success=Usuario actualizado exitosamente!");
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
