<html>
<head>
<meta charset="utf-8">
<title>logout</title>
<style type='text/css'>
body {background: transparent url(
http://1.bp.blogspot.com/_sNUg78--3Bw/TQ0yBAfJFgI/AAAAAAAABco/3tBk6zBc6ZE/s1600/fondo%2Blove.png) no-repeat fixed center center;
}
</style>
</head>

<?php
session_start();

session_destroy();
echo '<script>alert ("sesión finalizada");</script>';
echo '<script>window.location= "ingresar.php"</script>';



?>
</html>