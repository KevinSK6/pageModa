<?php
include 'connect.php';

if (isset($_POST['send'])) {

	$name = mysql_real_escape_string($_POST['name']);
	$gmail = mysql_real_escape_string($_POST['gmail']);
	$messeges = mysql_real_escape_string($_POST['messege']);

	$insertar = "INSERT INTO messege (name, gmail, messeges) VALUES ('$name', '$gmail', '$messeges')";

	$resultado = mysqli_query($conexion, $insertar);

    $verificar_gmail = mysqli_num_rows(mysqli_quey($conexion, "SELECT * FROM messege WHERE gmail = '$gmail'"));

    if ($verificar_gmail > 0 ) {
    	echo '<script>
    			alert("El gmail ya se encuentra regsitrado");
    		  </script>';
    }
    else {
		if (!$resultado) {
		echo 'Error al entrar a la base de datos';
		}
		else {	
			echo '<script>
					alert("Registro correctamente");
					window.history.go(-1);
				  </script>';
		}
    }
}

mysqli_close($conexion); 

?>