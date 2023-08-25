<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<title>Capsule Corp</title>
</head>
<body>
	<div class="align">
		<img class="logo" src="imagenes/Logo Shelby.png" width="15%">
		<div class="card">
			<div class="head">
				<div></div>
				<a id="login"  href="indexlogin.php">Iniciar sesion</a>
				<a id="register" class="selected" href="indexloginreg.html">Registrarse</a>
				<div></div>
			</div>
			<div class="tabs">
				<form action="agregarlogin.php" method="post">
					<div class="inputs">
						<div class="input">
							<input placeholder="Correo Electronico" type="text" id="Correo_Electronico" name="Correo_Electronico"/>
							<img src="img/Email.png" width="10%">
						</div>
						<div class="input">
							<input placeholder="Nombre de Usuario" type="text" name="usuario"/>
							<img src="img/user.png" width="10%">
						</div>
						<div class="input">
							<input placeholder="Contraseña" type="password" name="contrasena"/>
							<img src="img/Candado.png" width="10%">
						</div>
					</div>
						<button>Registrarse</button>
						<br>
					</div>
					<button>Iniciar sesion</button>
					
				</form>
			</a>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>
