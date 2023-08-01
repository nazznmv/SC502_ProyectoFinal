<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    
<?php 
    include 'navbar.php';

    // ID del usuario a editar
    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];
        
        // Conexión
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "SOLEMATE"; 

        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        if (!$conn) {
            die("Error en la conexión: " . mysqli_connect_error());
        }
        // Obtener los datos del usuario específico
        $sql = "SELECT id, username, name, lastname, password, role FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $sql);

        // Verificar datos del usuario existen
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Habilitar el campo "role" solo si el rol es "admin"
            $disabled = ($_SESSION['role'] === 'admin') ? '' : 'disabled';
            $defaultRole = ($user['role'] === 'user') ? 'user' : 'admin';

        } else {
            echo "El usuario no existe.";
            exit;
        }
        mysqli_close($conn);
    } else {
        echo "ID de usuario no proporcionado.";
        exit;
    }
    ?>
    

    <main>
        <div class="login">
            <h2>Editar Usuario</h2>
                <div class="container"> 
                    <form action="enviarEdicionUsuario.php" method="post">                         
                    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                        <div class="form-group"> 
                            <label class="Campo" for="nombre">Nombre de Usuario</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="username" id="uname" name="uname" aria-describedby="emailHelp" value="<?php echo $user['username']; ?>">
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="password">Nueva Contraseña</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="Nueva contraseña" id="new_password" name="new_password" aria-describedby="emailHelp" value="">
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="nombre">Nombre</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="nombre" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $user['name']; ?>">
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="apellidos">Apellido</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="apellido" id="lastname" name="lastname" aria-describedby="emailHelp" value="<?php echo $user['lastname']; ?>">
                            </div>
                        </div>

                        <div class="form-group"> 
                        
                            <div class="col-sm-10"> 
                            <?php
                                if ($_SESSION['role'] === 'admin') {
                                    // Si el usuario es "admin", muestra el campo de selección con las opciones "user" y "admin"
                                    echo '<label class="Campo" for="role">Rol</label>';
                                    echo '<select class="form-control" id="role" name="role">';
                                    echo '<option value="user" ' . (($user['role'] === 'user') ? 'selected' : '') . '>User</option>';
                                    echo '<option value="admin" ' . (($user['role'] === 'admin') ? 'selected' : '') . '>Admin</option>';
                                    echo '</select>';
                                } else {
                                    // Si el usuario es "user", establece el valor del rol directamente en la consulta SQL
                                    echo '<input type="hidden" name="role" value="user">';
                                }
                            ?>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" value="Guardar">Guardar Cambios</button>

                    </form>
                    </div>
        </div>
    </main>
</body>
</html>