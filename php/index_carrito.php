<!-- Dentro de la tabla en index.php -->

<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "usuario_db", "contraseña_db", "carrito_productos");

// Obtener los productos del carrito
$query = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $query);

// Mostrar los productos en la tabla
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['precio']."</td>";
    echo "<td>".$fila['cantidad']."</td>";
    echo "<td><a href='eliminar_producto.php?id=".$fila['id']."'>Eliminar</a></td>";
    echo "</tr>";
}
?>
