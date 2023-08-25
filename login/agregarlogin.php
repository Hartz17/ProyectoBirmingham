<?php
	$servername = "localhost";
	$database = "clientes";
	$username = "root";
	$password = "";
	// Creando conexión
	$conn = mysqli_connect($servername, $username, $password, $database);
	//$conn=set_charset('utf8')
	// Chequeando la  conexión
	if (!$conn) {
	      die("Conexión Falló: " . mysqli_connect_error());
	}
	 
	echo "<h1><center>Conectado Satisfactoriamente</h1></center>";

 
	 // Tomando datos del formulario para luego ser enviados a la base de datos

		$Username=$_POST['Username'];
		$contrasena=$_POST['contrasena'];
		$Correo_Electronico=$_POST['Correo_Electronico'];

		echo $Correo_Electronico;
		echo $Username;
		echo $contrasena;
		
	// Enviando datos a la Base de Datos (Cliente) a la Tabla Login
		
	$sql = "INSERT INTO login (Username, contrasena, Correo_Electronico) VALUES ('$Username','$contrasena','$Correo_Electronico')";
	if (mysqli_query($conn, $sql)) {
	      echo "<h1><center>Registro Grabado Perfectamente<center></h1>";
	} else {
	      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	//Permite que se envie la información y regrese al formulario de Ingreso de Clientes
	echo "<meta http-equiv='refresh' content='3; url=index1.html'>" // content es el tiempo de espera
?>