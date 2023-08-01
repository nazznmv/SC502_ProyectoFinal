<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/search.css">
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
    <main>

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
        <div class="search-bar-container">
            <div class="contenedor-grupo">
                <img src="../img/sneaker.png" alt="">
                <form action="resultadosBusqueda.php" method="get">
                    <input type="text" class="search-bar" name="palabras_clave" placeholder="Palabra clave...">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>
    </main>


    
</body>

</html>
