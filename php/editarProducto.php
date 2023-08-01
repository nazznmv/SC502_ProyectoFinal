
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php 
    include 'navbar.php';

    // ID del producto a editar
    if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];
        
        // Conexión a la base de datos
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "SOLEMATE"; 

        $conn = mysqli_connect($sname, $uname, $password, $db_name);

        if (!$conn) {
            die("Error en la conexión: " . mysqli_connect_error());
        }
        // Obtener los datos del producto
        $sql = "SELECT product_id, product_name, category_id, brand_id, model, image FROM products WHERE product_id = '$product_id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $product = mysqli_fetch_assoc($result);
        } else {
            echo "El producto no existe.";
            exit;
        }
        mysqli_close($conn);
    } else {
        echo "ID de producto no proporcionado.";
        exit;
    }
    ?>
    
    <main>
        <div class="login">
            <h2>Editar Producto</h2>
            <div class="container"> 
                <form action="enviarEdicionProducto.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                    <div class="form-group"> 
                        <label class="Campo" for="product_name">Nombre del Producto</label>
                        <div class="col-sm-10"> 
                            <input type="text" class="form-control" placeholder="Nombre del producto" id="product_name" name="product_name" aria-describedby="emailHelp" value="<?php echo $product['product_name']; ?>">
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="Campo" for="category_id">Categoría</label>
                        <div class="col-sm-10"> 
                            <select class="form-control" id="category_id" name="category_id">
                                <?php
                                // Conexión a la base de datos para obtener las categorías
                                $conn = mysqli_connect($sname, $uname, $password, $db_name);
                                if (!$conn) {
                                    die("Error en la conexión: " . mysqli_connect_error());
                                }

                                $sql = "SELECT category_id, category_name FROM categories";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $selected = ($row['category_id'] === $product['category_id']) ? 'selected' : '';
                                        echo "<option value='" . $row['category_id'] . "' $selected>" . $row['category_name'] . "</option>";
                                    }
                                } else {
                                    echo "<option value='0'>No hay categorías disponibles</option>";
                                }

                                mysqli_close($conn);
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="Campo" for="brand_id">Marca</label>
                        <div class="col-sm-10"> 
                            <select class="form-control" id="brand_id" name="brand_id">
                                <?php
                                // Conexión a la base de datos para obtener las marcas
                                $conn = mysqli_connect($sname, $uname, $password, $db_name);
                                if (!$conn) {
                                    die("Error en la conexión: " . mysqli_connect_error());
                                }

                                $sql = "SELECT brand_id, brand_name FROM brands";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $selected = ($row['brand_id'] === $product['brand_id']) ? 'selected' : '';
                                        echo "<option value='" . $row['brand_id'] . "' $selected>" . $row['brand_name'] . "</option>";
                                    }
                                } else {
                                    echo "<option value='0'>No hay marcas disponibles</option>";
                                }

                                mysqli_close($conn);
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="Campo" for="model">Modelo</label>
                        <div class="col-sm-10"> 
                            <input type="text" class="form-control" placeholder="Modelo" id="model" name="model" aria-describedby="emailHelp" value="<?php echo $product['model']; ?>">
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="Campo" for="image">URL de la Imagen</label>
                        <div class="col-sm-10"> 
                            <input type="text" class="form-control" placeholder="URL de la imagen" id="image" name="image" aria-describedby="emailHelp" value="<?php echo $product['image']; ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" value="Guardar">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
