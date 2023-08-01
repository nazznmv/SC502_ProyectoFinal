<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Usuario</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php 
    // Iniciar sesión antes de incluir el navbar.php
    //session_start(); 
    include 'navbar.php'; 
    ?>

    <main>
        <div class="login">
            <h2>Iniciar Sesión</h2>
            <?php
            // Mostrar mensaje de error si existe
            if (isset($_GET['error'])) {
                ?>
                <div class="alert alert-danger">
                    <?php echo $_GET['error']; ?>
                </div>
                <?php
            }

            // Mostrar mensaje de éxito si existe
            if (isset($_GET['success'])) {
                ?>
                <div class="alert alert-success">
                    <?php echo $_GET['success']; ?>
                </div>
                <?php
            }
            ?>
            <form action="loginSubmit.php" method="post">
                <!-- Login Controls -->
                <div class="form-group">
                    <label class="Campo" for="txtUsername">Usuario</label>
                    <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="txtPassword" class="Campo">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <!-- Login Button -->
                <div class="form-actions" style="margin-top: 12px;">
                    <button type="submit" class="btn btn-success">Aceptar</button>
                </div>
            </form>

            <a class="mt-5" href="registro.php" role="button">Registrarse</a>

        </div>
    </main>


    
</body>

</html>
