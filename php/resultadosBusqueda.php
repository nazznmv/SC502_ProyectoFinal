<?php

if (isset($_GET['palabras_clave'])) {
  
    $palabra_clave = $_GET['palabras_clave'];

    // Conexión a la base de datos
    $sname = "localhost";
    $uname = "root";
    $db_password = ""; 
    $db_name = "SOLEMATE"; 

    $conn = mysqli_connect($sname, $uname, $db_password, $db_name);

    // Verificar la conexión
    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    // Buscar palabra
    $sql = "SELECT address FROM keywords WHERE keyword_name = '$palabra_clave'";
    $result = mysqli_query($conn, $sql);

    // Verificar si se encontró alguna coincidencia
    if (mysqli_num_rows($result) > 0) {
        // Obtener la dirección de la página correspondiente
        $row = mysqli_fetch_assoc($result);
        $direccion_pagina = $row['address'];

        // Redirigge
        header("Location: $direccion_pagina");
        exit;
    } else {
        // MSJ error si no se encontraron resultados
        header("Location: busqueda.php?error=Intentar con otra palabra clave!");
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>

