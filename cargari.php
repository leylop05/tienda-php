<?php
require_once 'conexion.php';
$ID= $_REQUEST["ID"];
$nom= $_REQUEST["Nombre"];
$DESCUENTO= $_REQUEST["DESCUENTO"];
$PRECIO= $_REQUEST["PRECIO"];
$CANTIDAD= $_REQUEST["CANTIDAD"];
$ID_CATEGORIA= $_REQUEST["ID_CATEGORIA"];
$foto= $_FILES["Foto"]["name"];
$ruta= $_FILES["Foto"]["tmp_name"];
$destino ="productos/".$foto;
copy($ruta,$destino);
mysql_query("insert into productos(ID,Nombre,DESCUENTO,PRECIO,CANTIDAD,ID_CATEGORIA,Foto)values('$ID','$nom','$DESCUENTO','$PRECIO','$CANTIDAD','$ID_CATEGORIA','$destino')");
header("location:insertari.php");
?>