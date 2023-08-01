<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/tablas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php 
    include 'navbar.php'; 
    ?>
    <div class="contenedorTabla">
    <h1>Mi Cuenta</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre de Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Editar</th>
        </tr>
        <?php
        // Conexión
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "SOLEMATE"; 

        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        // conexión fue exitosa ?
        if (!$conn) {
            die("Error en la conexión: " . mysqli_connect_error());
        }

        
        if (isset($_SESSION['user_id'])) {
            // obtener el ID del usuario que ha iniciado sesión
            $user_id = $_SESSION['user_id'];

            // obtener los datos del usuario que ha iniciado sesión
            $sql = "SELECT id, username, name, lastname, role FROM users WHERE id = '$user_id'";
            $result = mysqli_query($conn, $sql);

            // Verificar si se encontraron datos del usuario
            if (mysqli_num_rows($result) === 1) {
                $user = mysqli_fetch_assoc($result);

                // mostrar los datos del usuario en la tabla
                echo "<tr>";
                echo "<td>" . $user["id"] . "</td>";
                echo "<td>" . $user["username"] . "</td>";
                echo "<td>" . $user["name"] . "</td>";
                echo "<td>" . $user["lastname"] . "</td>";
                echo "<td><a href='editarUsuario.php?id=" . $user["id"] . "'>Editar</a></td>";
                echo "</tr>";
            } else {
                echo "<tr><td colspan='5'>No se encontraron datos del usuario</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Debe iniciar sesión para ver esta información</td></tr>";
        }

        // Cerrar la conexión
        mysqli_close($conn);
        ?>
    </table>
    </div>
    
</body>
</html>
