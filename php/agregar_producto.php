<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost:80", "Joseth", "Joseth10.", "carrito_productos");

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

// Insertar el producto en la base de datos
$query = "INSERT INTO productos (nombre, precio, cantidad) VALUES ('$nombre', $precio, $cantidad)";
mysqli_query($conexion, $query);

// Redireccionar al index.php
header("Location: index.php");
?>
