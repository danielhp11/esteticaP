<?php 
//"usuario"+nom+"&email"+email+"&pdw"+pwd2+"&tel"+tel+"&admin=0"
$usu = $_POST['usuario'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$tel = $_POST['tel'];
$admin = $_POST['admin'];
include "conexion.php";

$query = "INSERT INTO usuario(usuario,email,telefono,password,admin) VALUES ('$usu','$email','$tel','$pwd','$admin')";
$r = mysqli_query($dbc,$query);
mysqli_close($dbc);   
return $r;
?>
