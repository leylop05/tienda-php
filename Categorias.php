
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
<CENTER><form action="" method="POST">
 <CENTER><table border = "2" bgcolor="#E0ECF8"> 
<TR bgcolor="#E6E6E6"><td colspan="3"><h3 align="center">BUSQUEDA </h3></FONT></TD></tr>
Seleccione una categoria
<tr>
<td><?php
require_once 'conexion.php';
$sql=mysql_query("select*from imagenes WHERE id LIKE '1%'");
while($res=mysql_fetch_array ($sql)){
echo ' <img src="'.$res["Foto"].'"width="200" height= "50">';
}
?></td>
<td><input type="submit" name="Consultar1" style="width:100px"; height="25px" value="BOLSOS" ></input></td></tr>

<tr><td><?php

$sql=mysql_query("select*from imagenes WHERE id LIKE '2%'");
while($res=mysql_fetch_array ($sql)){
echo ' <img src="'.$res["Foto"].'"width="200" height= "50">';
}
?></TD>
<td><input type="submit" name="Consultar2" style="width:100px"; height="25px" value="ACCESORIOS" ></input></td></tr>
<td>
<?php

$sql=mysql_query("select*from imagenes WHERE id LIKE '3%'");
while($res=mysql_fetch_array ($sql)){
echo ' <img src="'.$res["Foto"].'"width="200" height= "50">';
}
?></TD>
<td><input type="submit" name="Consultar3" style="width:100px"; height="25px" value="FALDAS" ></input></td></tr>

<tr><td><?php

$sql=mysql_query("select*from imagenes WHERE id LIKE '4%'");
while($res=mysql_fetch_array ($sql)){
echo ' <img src="'.$res["Foto"].'"width="200" height= "50">';
}
?></TD>
<td><input type="submit" name="Consultar4" style="width:100px"; height="25px" value="ENTERIZOS" ></input></td></tr>

<tr><td><?php

$sql=mysql_query("select*from imagenes WHERE id LIKE '5%'");
while($res=mysql_fetch_array ($sql)){
echo ' <img src="'.$res["Foto"].'"width="200" height= "50">';
}
?>

</TD>
<td><input type="submit" name="Consultar5" style="width:100px"; height="25px" value="ZAPATOS" ></input></td></tr>
</table></CENTER>
  </form>
</body> 
 </HTML>

<?php
require_once 'conexion.php';
if(isset($_POST['Consultar1'])){

$query= "SELECT * FROM productos WHERE id_categoria LIKE '1%'" ;

$result=mysql_query($query);
echo "<center><table border = '2' bgcolor=#E0ECF8>"; 
echo "<TR bgcolor=#E6E6E6><td colspan=6><h3 align=center>PRODUCTOS</h3></FONT></TD></TR>";
echo "<tr><td>ID</td> <td>Nombre</td> <td>Descuento</td> <td>Precio</td> <td>Cantidad</td> <td>ID_categoria</td></tr>";

while($row = mysql_fetch_row($result)){ 
 "<table border = '2'>"; 

      echo "<tr><td>$row[0] <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td> </tr> \n"; 


} 
echo "</table></center><br>"; 
echo "<a href=descripcion.php target=_self> <input type=button name=boton value=cartera /> </a>";
}
if(isset($_POST['Consultar2'])){

$query= "SELECT * FROM productos WHERE id_categoria = 222" ;

$result=mysql_query($query);
echo "<center><table border = '2' bgcolor=#E0ECF8>"; 
echo "<TR bgcolor=#E6E6E6><td colspan=6><h3 align=center>PRODUCTOS</h3></FONT></TD></TR>";
echo "<tr><td>ID</td> <td>Nombre</td> <td>Descuento</td> <td>Precio</td> <td>Cantidad</td> <td>ID_categoria</td></tr>";
while($row = mysql_fetch_row($result)){ 
 "<table border = '2'>"; 

      echo "<tr><td>$row[0] <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td> </tr> \n"; 


} 
echo "</table></center>"; 
}
if(isset($_POST['Consultar3'])){

$query= "SELECT * FROM productos WHERE id_categoria LIKE '3%'" ;

$result=mysql_query($query);
echo "<center><table border = '2' bgcolor=#E0ECF8>"; 
echo "<TR bgcolor=#E6E6E6><td colspan=6><h3 align=center>PRODUCTOS</h3></FONT></TD></TR>";
echo "<tr><td>ID</td> <td>Nombre</td> <td>Descuento</td> <td>Precio</td> <td>Cantidad</td> <td>ID_categoria</td></tr>";
while($row = mysql_fetch_row($result)){ 
 "<table border = '2'>"; 

      echo "<tr><td>$row[0] <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td> </tr> \n"; 


} 
echo "</table></center>"; 
}
if(isset($_POST['Consultar4'])){

$query= "SELECT * FROM productos WHERE id_categoria LIKE '4%'" ;

$result=mysql_query($query);
echo "<center><table border = '2' bgcolor=#E0ECF8>"; 
echo "<TR bgcolor=#E6E6E6><td colspan=6><h3 align=center>PRODUCTOS</h3></FONT></TD></TR>";
echo "<tr><td>ID</td> <td>Nombre</td> <td>Descuento</td> <td>Precio</td> <td>Cantidad</td> <td>ID_categoria</td></tr>";
while($row = mysql_fetch_row($result)){ 
 "<table border = '2'>"; 

      echo "<tr><td>$row[0] <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td> </tr> \n"; 


} 

echo "</table></center>"; 
}
if(isset($_POST['Consultar5'])){

$query= "SELECT * FROM productos WHERE id_categoria LIKE '5%'" ;

$result=mysql_query($query);
echo "<center><table border = '2' bgcolor=#E0ECF8>"; 
echo "<TR bgcolor=#E6E6E6><td colspan=6><h3 align=center>PRODUCTOS</h3></FONT></TD></TR>";
echo "<tr><td>ID</td> <td>Nombre</td> <td>Descuento</td> <td>Precio</td> <td>Cantidad</td> <td>ID_categoria</td></tr>";
while($row = mysql_fetch_row($result)){ 
 "<table border = '2'>"; 

      echo "<tr><td>$row[0] <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td> </tr> \n"; 


} 

echo "</table></center>"; 
}

echo "<br>";
echo "<a href=buscar.php target=_self> <input type=button name=boton value=Regresar /> </a>";


?> 


