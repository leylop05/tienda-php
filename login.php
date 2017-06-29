<html>
<head>
<meta charset="utf-8">
<title>Bienvenido</title>
<link href="estilos1.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
session_start();
?>
 
<?php require_once 'conexion.php'; ?>

<?php
 
if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: intropage.php");
}
 
if(isset($_POST["login"])){
 
if(!empty($_POST['user']) && !empty($_POST['password'])) {
 $user=$_POST['user'];
 $password=$_POST['password'];
 
$query =mysql_query("SELECT * FROM usuarios WHERE user='".$user."' AND password='".$password."'");
 
$numrows=mysql_num_rows($query);
 if($numrows!=0)
 
{
 while($row=mysql_fetch_assoc($query))
 {
 $dbuser=$row['user'];
 $dbpassword=$row['password'];
 }
 
if($user == $dbuser && $password == $dbpassword)
 
{
 
 $_SESSION['session_username']=$user;
 
/* Redirect browser */
 header("Location: intropage.php");
 }
 } else {
 
$message = "Nombre de usuario ó contraseña invalida!";
 }
 
} else {
 $message = "Todos los campos son requeridos!";
}
}
?>
 
  <h1>Logueo</h1>
<form name="loginform" id="loginform" action="" method="POST">
 <p>
 <label for="user_login">Nombre De Usuario<br />
 <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
 </p>
 <p>
 <label for="user_pass">Contraseña<br />
 <input type="password" name="password" id="password" class="input" value="" size="20" /></label>
 </p>
 <p class="submit">
 <input type="submit" name="login" class="button" value="Entrar" />
 </p>
 <p class="regtext">No estas registrado? <a href="formulario.php" >Registrate Aquí</a>!</p>
</form>
 
 
 <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
</body>
</html>