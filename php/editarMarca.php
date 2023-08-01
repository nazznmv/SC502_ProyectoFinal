<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Marca</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    
<?php 
    include 'navbar.php';

    // ID de la marca a editar
    if (isset($_GET['brand_id'])) {
        $brand_id = $_GET['brand_id'];
        
        // Conexión a la base de datos
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "SOLEMATE"; 

        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        if (!$conn) {
            die("Error en la conexión: " . mysqli_connect_error());
        }

        // Obtener los datos de la marca 
        $sql = "SELECT brand_id, brand_name FROM brands WHERE brand_id = '$brand_id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $brand = mysqli_fetch_assoc($result);
        } else {
            echo "La marca no existe.";
            exit;
        }
        mysqli_close($conn);
    } else {
        echo "ID de marca no proporcionado.";
        exit;
    }
?>

    <main>
        <div class="login">
            <h2>Editar Marca</h2>
                <div class="container"> 
                    <form action="enviarEdicionMarca.php" method="post">                         
                        <input type="hidden" name="brand_id" value="<?php echo $brand['brand_id']; ?>">
                        <div class="form-group"> 
                            <label class="Campo" for="brand_name">Nombre de la Marca</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="Nombre de la marca" id="brand_name" name="brand_name" aria-describedby="emailHelp" value="<?php echo $brand['brand_name']; ?>">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" value="Guardar">Guardar Cambios</button>

                    </form>
                </div>
        </div>
    </main>
    
</body>
</html>
