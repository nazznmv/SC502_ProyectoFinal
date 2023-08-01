<?php
session_start();
include "../BD/db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error=Nombre de usuario no puede estar vacío");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Contraseña no puede estar vacía");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            // Almacena el ID del usuario en la variable de sesión
            $_SESSION['user_id'] = $row['id'];

            // Redirige a la página principal
            header("Location: index.php");
            exit();
        } else {
            header("Location: login.php?error=Usuario o contraseña incorrectos");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>
