
<?php
session_start();

// Verifica si el usuario es "admin"
if ($_SESSION['role'] !== 'admin') {
    // Si no es "admin", redireccionar a otra página con un mensaje de error
    header("Location: myaccount.php?error=No tienes permiso para agregar usuarios.");
    exit;
}

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recupera los datos enviados desde el formulario
    $username = $_POST['uname'];
    $password = $_POST['new_password'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $role = $_POST['role'];

    // Conexión a la base de datos
    $sname = "localhost";
    $uname = "root";
    $db_password = ""; 
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $db_password, $db_name);


    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO users (username, password, name, lastname, role) VALUES ('$username', '$password', '$name', '$lastname', '$role')";

    if (mysqli_query($conn, $sql)) {
        // Redirecciona a la página de tabla de usuarios con un mensaje de éxito
        header("Location: tablaUsuarios.php?success=Nuevo usuario agregado exitosamente!");
        exit;
    } else {
        // Error
        echo "Error al agregar el nuevo usuario: " . mysqli_error($conn);
    }

 
    mysqli_close($conn);
}
?>
