<?php
session_start();
include 'conexion.php';
if(isset($_SESSION['user'])){
echo '<script> window.location="buscar.php";</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Ingreso</title>
<meta charset="utf-8">
<style type='text/css'>
body {background: transparent url(
http://1.bp.blogspot.com/_sNUg78--3Bw/TQ0yBAfJFgI/AAAAAAAABco/3tBk6zBc6ZE/s1600/fondo%2Blove.png) no-repeat fixed center center;
}
</style>
</head>

<body>
<br><br><br><br><br><br><br>
<center><h1 class="h1"> Login</h1>
<br><br>

		 
<form method="post" action ="validar.php">
<table border ="2">
 <tr>
<td><label for="user"> Usuario </td>
<td><input type="text" class="form-control" name= "user" autocomplete="off" required > </td></tr>
<tr>
<td><label for="password">Contraseña</td>
 <td><input type="password" class="form-control" name= "password" > </td></tr>
 <tr>
 <TD colspan="2"><center> <input type="submit" class="btn btn-success" name= "login" value ="Ingresar"> </td>
</table>
<br><br>
 ¿No estas registrado? Haz click<a href="formulario.php">->Aquí<-</a></center>
 
</form>
</body>
</html>