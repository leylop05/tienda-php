

<?php

include ("conexion.php");



$nombre = strip_tags($_POST['nombre']);
$email = strip_tags($_POST['email']);
$user = strip_tags($_POST['user']);
$password = strip_tags($_POST['password']);

$query = @mysql_query('SELECT * FROM usuarios WHERE user="'.mysql_real_escape_string($user).'"');
if($existe = @mysql_fetch_object($query))
{
	echo 'El usuario '.$user.' ya existe.';	
}
else{
	$meter = @mysql_query('INSERT INTO usuarios (nombre, email, user, password) values ("'.mysql_real_escape_string($nombre).'", "'.mysql_real_escape_string($email).'", "'.mysql_real_escape_string($user).'", "'.mysql_real_escape_string($password).'")');
	if($meter)
	{
		echo 'Usuario registrado con exito';
		echo "<br>";
		echo "<a href=buscar.php target=_self> <input type=button name=boton value=continuar > </a>";
	}else{
		echo 'Hubo un error en el registro.';	
		
	}
}
?>
