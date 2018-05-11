<?php
session_start(); 
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['rol'] == 'Administrador') {

        }else if ($_SESSION['rol'] == 'Motorista') {
            header("Location:DashboardUser.php");
        }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Login</title>
	<?php include_once 'src/header.php'; ?>
</head>
<body class="font-cover" id="login">
    <div class="error" id="error">
        <span>Datos de ingreso no validos, intentalo de nuevo por favor</span>
    </div>
    <div class="container-login center-align">
        <div style="margin:15px 0;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <p>Inicia sesión con tu cuenta</p>   
        </div>
        <form id="form" method="POST" action="controller/usuarioController.php">
            <div class="input-field">
                <input id="UserName" type="text" class="validate" name="usuario" required pattern="[A-Za-z0-9_-]{1,15}">
                <label for="UserName"><i class="zmdi zmdi-account"></i>&nbsp; Nombre</label>
            </div>
            <div class="input-field col s12">
                <input id="Password" type="password" class="validate" name="password" required pattern="[A-Za-z0-9_-]{1,15}">
                <label for="Password"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
            </div>
            <input class="waves-effect waves-gray btn-flat black" name="login" type="submit" value="Iniciar Sesion">
        </form>
        <div class="divider" style="margin: 20px 0;"></div>
    </div>
</body>
</html>