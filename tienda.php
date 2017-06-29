<html>
<body>
<html>

<head>
<style type='text/css'>
body {background: transparent url(
http://1.bp.blogspot.com/_sNUg78--3Bw/TQ0yBAfJFgI/AAAAAAAABco/3tBk6zBc6ZE/s1600/fondo%2Blove.png) no-repeat fixed center center;
}
</style>


</head>


<?php
include ("conexion.php");

$query="SELECT* FROM productos ";
$result=mysql_query($query);

echo "<center><table border = '2' bgcolor=#E0ECF8>"; 

echo "<TR bgcolor=#E6E6E6><td colspan=8><h3 align=center>PRODUCTOS</h6></FONT></TD></TR>";
echo "<tr><td>ID</td> <td>Nombre</td> <td>Descuento</td> <td>Precio</td> <td>Cantidad</td> <td>ID_categoria</td> <td>foto</td> <td>Descripción</td></tr>";


while($row = mysql_fetch_row($result)){ 
 "<table border = '2'>"; 

      echo "<tr><td>$row[0] <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td><td>$row[6]</td>"; 


} 
echo"</table>";

echo "<br><br><a href=buscar.php target=_self> <input type=button name=boton value=Regresar /> </a>";
?> 

	
</body> 
</html> 