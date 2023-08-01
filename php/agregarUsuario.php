

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <main>
        <!-- Formulario para agregar un nuevo usuario -->
        <div class="login">
            <h2>Agregar Usuario</h2>
            <div class="container">
                <form action="procesarAgregarUsuario.php" method="post">
                    <div class="form-group">
                        <label for="uname">Nombre de Usuario</label>
                        <input type="text" class="form-control" placeholder="username" id="uname" name="uname" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="new_password">Contraseña</label>
                        <input type="text" class="form-control" placeholder="Nueva contraseña" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" placeholder="nombre" id="name" name="name" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Apellido</label>
                        <input type="text" class="form-control" placeholder="apellido" id="lastname" name="lastname" aria-describedby="emailHelp">
                    </div>

                    <?php
                    if ($_SESSION['role'] === 'admin') {
                        // Si el usuario es "admin", muestra el campo de selección con las opciones "user" y "admin"
                        echo '<div class="form-group">';
                        echo '<label for="role">Rol</label>';
                        echo '<select class="form-control" id="role" name="role">';
                        echo '<option value="user">User</option>';
                        echo '<option value="admin">Admin</option>';
                        echo '</select>';
                        echo '</div>';
                    } else {
                        // Si el usuario es "user", establece el valor del rol directamente en la consulta SQL
                        echo '<input type="hidden" name="role" value="user">';
                    }
                    ?>

                    <button type="submit" class="btn btn-primary" value="Guardar">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
