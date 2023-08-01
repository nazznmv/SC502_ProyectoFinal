-- Crear la base de datos "carrito_productos"
CREATE DATABASE IF NOT EXISTS carrito_productos;

-- Seleccionar la base de datos para su uso
USE carrito_productos;

-- Crear la tabla "productos"
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    cantidad INT NOT NULL
);
