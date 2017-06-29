<?php	
session_start();
?>
<!DOCTYPE HTML>


<html>
<head>
<meta charset="utf-8">
<title>Validar</title>
<style type='text/css'>
body {background: transparent url(
http://1.bp.blogspot.com/_sNUg78--3Bw/TQ0yBAfJFgI/AAAAAAAABco/3tBk6zBc6ZE/s1600/fondo%2Blove.png) no-repeat fixed center center;
}
</style>
</head>

<body>
<?php
		include ("conexion.php");
		if(isset($_POST['login'])){
			$usuario = $_POST['user'];
			$password = $_POST['password'];
	      $log = mysql_query("SELECT*FROM usuarios WHERE user='$usuario' AND password='$password'");
			if(mysql_num_rows($log)>0){
				$row = mysql_fetch_array($log);
				$_SESSION["user"] = $row['user'];
				echo '<center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Iniciando sesion para:'.$_SESSION['user'].'<p>';
			echo'<a href="buscar.php" target="_self"> <input type="button" name="boton" value="CONTINUAR" />';
				//echo '<script> window.location="buscar.php"; </script>';
	}
	else{ 
		echo '<script>alert ("usuario o contraseña incorrecto");</script>';
		echo '<script>window.location=ingresar.php";</script>';
			}
									}

?>
</body>
</html>