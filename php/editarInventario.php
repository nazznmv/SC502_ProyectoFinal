

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Inventario</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    
<?php 
    include 'navbar.php';

    // ID del inventario a editar
    if (isset($_GET['inventory_id'])) {
        $inventory_id = $_GET['inventory_id'];
        
        // Conexión
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "SOLEMATE"; 

        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        if (!$conn) {
            die("Error en la conexión: " . mysqli_connect_error());
        }
        // Obtener los datos del inventario específico
        $sql = "SELECT inventory_id, product_id, quantity FROM inventory WHERE inventory_id = '$inventory_id'";
        $result = mysqli_query($conn, $sql);

        // Verificar datos del inventario existen
        if (mysqli_num_rows($result) > 0) {
            $inventory = mysqli_fetch_assoc($result);
        } else {
            echo "El inventario no existe.";
            exit;
        }
        mysqli_close($conn);
    } else {
        echo "ID de inventario no proporcionado.";
        exit;
    }
    ?>
    

    <main>
        <div class="login">
            <h2>Editar Inventario</h2>
                <div class="container"> 
                    <form action="enviarEdicionInventario.php" method="post">                         
                    <input type="hidden" name="inventory_id" value="<?php echo $inventory['inventory_id']; ?>">
                        <div class="form-group"> 
                            <label class="Campo" for="product_id">ID del Producto</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="ID del producto" id="product_id" name="product_id" aria-describedby="emailHelp" value="<?php echo $inventory['product_id']; ?>">
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="Campo" for="quantity">Cantidad</label>
                            <div class="col-sm-10"> 
                                <input type="text" class="form-control" placeholder="Cantidad" id="quantity" name="quantity" aria-describedby="emailHelp" value="<?php echo $inventory['quantity']; ?>">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" value="Guardar">Guardar Cambios</button>

                    </form>
                </div>
        </div>
    </main>
    
</body>
</html>
