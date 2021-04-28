<?php
session_start();
$dbc = mysqli_connect("localhost","root","","Estetica");
$username = $_REQUEST['email'];
$password = $_REQUEST['pwd'];
$query = "select * from usuario where email='". $username."' ";
$r = mysqli_query($dbc,$query);
$row=mysqli_fetch_array($r);
if ($r) {
    if($password ==  $row['password']){
        echo '<p >El usuario exite y la contraseña es correcta</p>';
        if($row['Admin']== 0){
            $_SESSION['logged_ID'] = $row['Id'];
            header("Location: ./../usuario/index.php");
        }else{
            $_SESSION['logged_ID'] = $row['Id'];
            header("Location: ./../Admin/index.php");
        }
    }else{
        echo '<p >contraseña incorrecta</p>';
    }
    
    
} 
?>
