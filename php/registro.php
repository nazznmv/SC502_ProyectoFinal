<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php'; ?>
    
    <?php
        // Verificar si hay un mensaje de éxito en la URL
        if (isset($_GET['success'])) {
            ?>
            <div class="alert alert-success">
                <?php echo $_GET['success']; ?>
            </div>
            <?php
        }
    ?>

<?php
        // Verificar si hay un mensaje de éxito en la URL
        if (isset($_GET['error'])) {
            ?>
            <div class="alert alert-success">
                <?php echo $_GET['error']; ?>
            </div>
            <?php
        }
    ?>

    <main>
        <div class="login">
            <h2>Registrarse</h1>
                <div class="container"> 
                    <form action="submitRegistration.php" method="post">                         
                        <input type ="hidden">
                        <div class="form-group"> 
                            <label class="Campo" for="nombre">Nombre de Usuario</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="username" id="uname" name="uname" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="password">Contraseña</label>
                            <div class="col-sm-10"> 
                            <input type="password" class="form-control" id="password" name="password" placeholder="password">
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="nombre">Nombre</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="nombre" id="name" name="name" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="apellidos">Apellido</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="apellido" id="lastname" name="lastname" aria-describedby="emailHelp"> 
                            </div>
                        </div>

                        
                        <button type="submit" class="btn btn-primary" value="Guardar">Registrarse</button>

                    </form>  
                </div>
            </div>
        </div>
    </main>


</body>

</html>