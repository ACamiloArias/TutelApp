<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>TutelApp</title>
</head>
 <td width=80 align=center><body background="images/Fondo.jpeg" style="background-attachment: fixed" >
		<right></right><div class="Ingreso">

	<table border="0" align="right" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">
             <div class="tit"><h2 style="color: #000000; ">Inicio de sesión</h2>
		<tr><td><label style="font-size: 14pt; color:#000000;"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="email" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt; color:#000000;"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt; color:#000000;"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color:#000000;"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #000000;"><b>Ingresa tu email</b></label>
      <input type="email" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #000000;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color:#000000;"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></right></div></right>

	
</body>
</html>