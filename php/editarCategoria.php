<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    
<?php 
    include 'navbar.php';

    // ID de la categoría a editar
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        
        // Conexión a la base de datos
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "SOLEMATE"; 

        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        if (!$conn) {
            die("Error en la conexión: " . mysqli_connect_error());
        }

        // Obtener los datos de la categoría
        $sql = "SELECT category_id, category_name FROM categories WHERE category_id = '$category_id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $category = mysqli_fetch_assoc($result);
        } else {
            echo "La categoría no existe.";
            exit;
        }
        mysqli_close($conn);
    } else {
        echo "ID de categoría no proporcionado.";
        exit;
    }
?>

    <main>
        <div class="login">
            <h2>Editar Categoría</h2>
                <div class="container"> 
                    <form action="enviarEdicionCategoria.php" method="post">                         
                        <input type="hidden" name="category_id" value="<?php echo $category['category_id']; ?>">
                        <div class="form-group"> 
                            <label class="Campo" for="category_name">Nombre de la Categoría</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="Nombre de la categoría" id="category_name" name="category_name" aria-describedby="emailHelp" value="<?php echo $category['category_name']; ?>">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" value="Guardar">Guardar Cambios</button>

                    </form>
                </div>
        </div>
    </main>
    
</body>
</html>
