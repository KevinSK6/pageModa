<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$database = "base_moda";


$conexion = mysqli_connect($host, $user, $password, $database);

if (!$conexion) {
	echo 'Error al ingresar a la base de datos.';
}
else {
	// echo "Conexión establecida correctamente";
}

?>