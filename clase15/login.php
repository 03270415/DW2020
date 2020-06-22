<?php
session_start();
require_once("libs/conex.php");
require_once("libs/acceso.lib.php");
if($_POST)
  {
  usuariovalidar($_POST['usuario'],md5($_POST['contrasena']), $conn);

if($row = mysqli_fetch_array($dato)){
if($row['contrasena'] ==  $contrasena){
    session_start();
    header("Location: index.php");
}else{
   $alert = 'La contraseña es incorrecta.';
    header("Location: index.php");
    exit();
}
}
  }
  header('Location:index.php');
  if($_POST['usuario']==null || $_POST['contrasena']==nul  )
  echo '<span> Completar los campos.</span>'
  else
{
    $usuario = mysqli_real_escape_string($_POST['usuario'], $con);
    $contrasena = mysqli_real_escape_string($_POST['$contrasena'], $con);
    $dato = mysqli_query($con, "SELECT user, pass FROM usuario WHERE usuario = '$usuario' AND contrasena = '$contrasena' ");
    }
    value = $_POST['$correo'];
echo filter_var($value, FILTER_SANITIZE_EMAIL);
}
 ?>
