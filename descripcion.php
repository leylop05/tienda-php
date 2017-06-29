<html>
<body>
<html>

<link href="estilos.css" rel="stylesheet" type="text/css">


<?php
include ("conexion.php");

$sql=mysql_query("select*from  descripcion WHERE id_producto  LIKE '1%'");
$res=mysql_query($query);

echo "<left><table border = '2' bgcolor=#E0ECF8>"; 
echo "<TR bgcolor=#E6E6E6><td colspan=8><h3 align=center>PRODUCTOS</h6></FONT></TD></TR>";
echo "<tr> <td>Nombre</td> <td>Tamaño</td> <td>Color</td> <td>Descripciòn</td></tr>";

while($row = mysql_fetch_row($result)){ 
 "<table border = '2'>"; 

      echo "<tr><td>$row[0] <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td>"; 


} 
$sql=mysql_query("select*from imagenes WHERE id  LIKE '0%'");
while($res=mysql_fetch_array ($sql)){
echo ' <img src="'.$res["Foto"].'"width="200" height= "50">';
} 
?> 

	
</body> 
</html> 