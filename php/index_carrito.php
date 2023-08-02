<?php
session_start();

// Inicializar el carrito si no existe
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Agregar un producto al carrito
if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $_SESSION['cart'][] = array(
        'name' => $product_name,
        'price' => $product_price
    );
}

// Eliminar un producto del carrito
if (isset($_GET['remove_from_cart'])) {
    $index = $_GET['remove_from_cart'];
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
    }
}

// Realizar la compra (limpiar el carrito)
if (isset($_GET['buy'])) {
    $_SESSION['cart'] = array();
    header('Location: historial.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <form method="post">
        <label for="product_name">Nombre del producto:</label>
        <input type="text" id="product_name" name="product_name" required>
        <label for="product_price">Precio:</label>
        <input type="number" id="product_price" name="product_price" min="0" step="0.01" required>
        <button type="submit" name="add_to_cart">Agregar al carrito</button>
    </form>
    <h2>Productos en el carrito:</h2>
    <ul>
        <?php
        $total_price = 0;
        foreach ($_SESSION['cart'] as $index => $product) {
            echo "<li>{$product['name']} - {$product['price']} 
                  <a href=\"?remove_from_cart={$index}\">Eliminar</a></li>";
            $total_price += $product['price'];
        }
        ?>
    </ul>
    <h3>Total: <?php echo $total_price; ?></h3>
    <button onclick="window.location.href='?buy=true'">Comprar</button>
</body>
</html>

