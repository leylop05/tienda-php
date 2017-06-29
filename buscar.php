
<?php
session_start();

include 'conexion.php';
if(isset($_SESSION['user'])){?>

<!DOCTYPE HTML>

<html>
<head>
<title>Buscar</title>
<style type='text/css'>
body {background: transparent url(
http://1.bp.blogspot.com/_sNUg78--3Bw/TQ0yBAfJFgI/AAAAAAAABco/3tBk6zBc6ZE/s1600/fondo%2Blove.png) no-repeat fixed center center;
}
</style>
</head>
<meta charset="utf-8">

</head>
<body>
<br><br><br><br><br><br><br><br><br>

 <CENTER><table border = "2" bgcolor="#E0ECF8"> 
<TR bgcolor="#E6E6E6"><td colspan="3"><h3 align="center">BUSQUEDA </h3></FONT></TD></tr>
Seleccione una opcion
<tr>
<td>Consultar por categoria</TD>
<td><a href="categorias.php" target="_self"> <input type="button" name="boton" value="Aceptar" /> </a></td>
</tr>
<tr>
<td>ver todos los productos</TD>
<td><a href="tienda.php" target="_self"> <input type="button" name="boton" value="Aceptar" /> </a></td>
</tr>
</table>
<br><br>
<a href="logout.php"><button>salir</button></a>
</body>
</html>
<?php
}else{
echo '<script> window.location="ingresar.php";</script>';
}
?>