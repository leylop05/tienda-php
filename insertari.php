<html>
<head> 
<title>insertar_adminitrador</title>
<meta http-equiv="content-Type" content="text/html; charset =UTF-8">
</head>

 <body>
<form action="cargari.php" method ="POST" enctype ="multipart/form-data">
		<center> <table border "2">
		<tr>
				<td> ID  </td> <td> <input type="text" name= "ID" value =""></td>
			</tr>
						
			<tr>
				<td> Nombre  </td> <td> <input type="text" name= "Nombre" value =""></td>
			</tr>
			<tr>
				<td> DESCUENTO  </td> <td> <input type="text" name= "DESCUENTO" value =""></td>
			</tr>
			<tr>
				<td> PRECIO </td> <td> <input type="text" name= "PRECIO" value =""></td>
			</tr>
			<tr>
				<td> CANTIDAD </td> <td> <input type="text" name= "CANTIDAD" value =""></td>
			</tr>
			<tr>
				<td> ID_CATEGORIA  </td> <td> <input type="text" name= "ID_CATEGORIA" value =""></td>
			</tr>
			<tr>
				<td>Imagen </td> <td> <input type="file" name= "Foto" id ="foto"></td>
			</tr>
			<tr>
				<td colspan ="2" align ="center">  <input type="submit" name= "enviar" value ="Enviar"></td>
			</tr>
		</center></table>	
		
</form>
<?php
require_once 'conexion.php';
$sql=mysql_query("select*from PRODUCTOS");
while($res=mysql_fetch_array ($sql)){
echo '<img src="'.$res["Foto"].'"width="200" height= "200">';
}
?>
<br> <br>
 </body>

</html>