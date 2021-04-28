<?php
//serv=caballero$fecha=2020-12-02&hora=13:18
session_start();
$serv=$_REQUEST['serv'];
$fecha=$_REQUEST['fecha'];
$hr=$_REQUEST['hora'];
$ID=$_SESSION['logged_ID'];
include "conexion.php";
$query = "INSERT INTO cita(idusuario,servicio,fecha,dia) VALUES('".$ID."','".$serv."','".$fecha."','".$hr."')";
$r = mysqli_query($dbc,$query);
mysqli_close($dbc); 
header("Location: ./../usuario/createCit.html");
?>
