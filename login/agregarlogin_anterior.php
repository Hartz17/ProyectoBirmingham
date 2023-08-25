<?php
	$servername = "localhost";
	$database = "cliente";
	$username = "root";
	$password = "";
	// Creando conexión
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Chequeando la  conexión
	if (!$conn) {
	      die("Conexión Falló: " . mysqli_connect_error());
	}
	 
	echo "<h1><center>Conectado Satisfactoriamente</h1></center>";

 
	 // Tomando datos del formulario para luego ser enviados a la base de datos

		$usuario=$_POST['usuario'];
		$contrasena=$_POST['contrasena'];
		$Correo_Electronico=$_POST['Correo_Electronico'];

		echo $Correo_Electronico;
		echo $usuario;
		echo $contrasena;
		
	// enviando datos a la Base de Datos (Mantenimiento) a la Tabla Clientes
		
	$sql = "INSERT INTO login (usuario, contrasena, Correo_Electronico) VALUES ('$usuario', '$contrasena', '$Correo_Electronico')";
	if (mysqli_query($conn, $sql)) {
	      echo "<h1><center>Registro Grabado Perfectamente<center></h1>";
	} else {
	      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	//Permite que se envie la información y regrese al formulario de Ingreso de Clientes
	echo "<meta http-equiv='refresh' content='3; url=indexlogin.html'>" // content es el tiempo de espera
?>