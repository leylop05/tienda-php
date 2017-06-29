<html>
<body>
<center>
<table border"2">
<tr>
<th>id</th>
<th>nombre</th>
<th>foto</th>
</tr>
<?php

include ("conexion.php");
$query= "SELECT * FROM imagenes";
$resultado=$conexion->query($query);
while($row = $resultado -> fetch_assoc()){
?>
<tr>
<td><?php echo $row ['id']; ?></td>
<td><?php echo $row ['nombre']; ?></td>
<td> <img src = "data:image/jpg;base64; <?php echo base64_encode($row['foto']);?>"/></td>
</tr>
<?php
}
?>
</body>
<html>