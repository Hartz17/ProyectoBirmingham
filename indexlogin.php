<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/stylelogin1.css">
	<title>CapsuleCorp</title>
</head>
<body>
	<div class="align">
		<img class="logo" src="img/Capsule.png">
		<div class="card">
			<div class="head">
				<div></div>
				<a id="login" class="selected" href="val.php">Iniciar sesion</a>
				<a id="register" href="indexloginreg.php">Registrarse</a>
				<div></div>
			</div>
			<div class="tabs">
				<form action="val.php" method="post">
					<div class="inputs">
						<div class="input">
							<input placeholder="Nombre de Usuario" type="text" name="usuario">
							<img src="img/user.png">
						</div>
						<div class="input">
							<input placeholder="Contraseña" type="password" name="contrasena">
							<img src="img/Candado.png">
						</div>
						<label class="checkbox">
							<input type="checkbox">
							<span>Recuerdame</span>
						</label>
					</div>
					<button>Iniciar sesion</button>
				</form>
				<form>
					<div class="inputs">
						<div class="input">
							<input placeholder="Correo Electronico" type="text">
							<img src="img/mail.svg">
						</div>
						<div class="input">
							<input placeholder="Nombre de Usuario" type="text">
							<img src="img/user.svg">
						</div>
						<div class="input">
							<input placeholder="Contraseña" type="password">
							<img src="img/pass.svg">
						</div>
					</div>
					<button>Register</button>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>
