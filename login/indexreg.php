<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>

    <div class="login-box">
      <img src="imagenes/Logo Shelby.png" class="avatar" alt="Avatar Image">
      <h1>Register Here</h1>
      <form action="agregarlogin.php" method="post">
        <!-- USERNAME INPUT -->
        <label for="username">Username</label>
        <input type="text" name="Username" placeholder="Enter Username">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" name="contrasena" placeholder="Enter Password">
        <!--CORREO ELECTRINICO-->
        <label for="correo">Correo_Electronico</label>
        <input type="text" name="Correo_Electronico" placeholder="Enter Gmail">
        <input type="submit" value="Log In">
      </form>
    </div>
  </body>
</html>
