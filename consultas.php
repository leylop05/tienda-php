
<html><head><meta charset="utf-8"> </head>
<body>
<?php

function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Nombre: ".$resultados['nombre']."<br/> ";
echo "- Apellidos: ".$resultados['apellidos']."<br/>";
echo "- Dirección: ".$resultados['direccion']."<br/>";
echo "- Teléfono: ".$resultados['telefono']."<br/>";
echo "- Edad: ".$resultados['edad']."<br/>";}
else {echo "<br/>No hay más datos: <br/>".$resultados;}
}
$link = mysqli_connect("sql203.byethost7.com", "b7_10356956", "*****");
mysqli_select_db($link, "b7_10356956_mibasededatos");
$tildes = $link->query("SET NAMES 'utf8'");
$result = mysqli_query($link, "SELECT * FROM agenda");
$extraido1= mysqli_fetch_array($result);
mostrarDatos($extraido1);
$extraido2= mysqli_fetch_array($result);
mostrarDatos($extraido2);
$extraido3= mysqli_fetch_array($result);
mostrarDatos($extraido3);
$extraido4= mysqli_fetch_array($result);
mostrarDatos($extraido4);
$extraido5= mysqli_fetch_array($result);
mostrarDatos($extraido5);
$extraido6= mysqli_fetch_array($result);
mostrarDatos($extraido6);
mysqli_free_result($result);
mysqli_close($link);
?>
</body>
</html>