

<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "SOLEMATE";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Conexión fallida!";
}
else{
    echo "Conexión exitosa";
}