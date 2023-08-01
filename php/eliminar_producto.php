<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "usuario_db", "contraseña_db", "carrito_productos");

// Obtener el ID del producto a eliminar
$idProducto = $_GET['id'];

// Eliminar el producto de la base de datos
$query = "DELETE FROM productos WHERE id = $idProducto";
mysqli_query($conexion, $query);

// Redireccionar al index.php
header("Location: index.php");
?>
