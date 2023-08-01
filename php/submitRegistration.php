
<?php
include "../BD/db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];

    // Validar los datos recibidos (puedes agregar más validaciones según tus requerimientos)
    if (empty($uname) || empty($password) || empty($name) || empty($lastname)) {
        header("Location: registro.php?error=Todos los campos son obligatorios");
        exit();
    }

    // Preparar y ejecutar la consulta SQL para insertar el nuevo usuario en la tabla
    $sql = "INSERT INTO users (username, password, name, lastname, role) VALUES ('$uname', '$password', '$name', '$lastname', 'user')";

    if (mysqli_query($conn, $sql)) {
        header("Location: registro.php?success=Usuario registrado exitosamente");
        exit();
    } else {
        header("Location: registro.php?error=Error al registrar el usuario");
        exit();
    }
}
?>
