<?php
session_start();
include 'login.php';

$usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $nuevacontrasena = $_POST['nuevacontrasena'];
        $confirmarnuevacontrasena = $_POST['confirmarnuevacontrasena'];
        $dato = mysql_query("SELECT contrasena FROM usuario WHERE
usuario_id='$usuario'");
        if(!$dato)
        {
        echo "No se encuentra la contraseña ingresada.";
        }
        else if($contrasena!= mysql_result($dato, 0))
        {
        echo "Contraseña incorrecta.";
        }
        if($nuevacontrasena==$confirmarnuevacontrasena)
        $sql=mysql_query("UPDATE usuario SET contrasena='$nuevacontrasena' where user_id='$usuario'");
        if($sql)
        {
        echo "Cambiaste de contraseña.";
        }
       else
        {
       echo "No coincide.";
       }
?>
<?php
session_start();
include 'login.php';
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $nuevousuario = $_POST['nuevousuario'];
        $confirmarnuevousuario = $_POST['confirmarnuevousuario'];
        $correo = $_POST['correo'];
        $nuevocorreo = $_POST['nuevocorreo'];
        $confirmarnuevouscorreo = $_POST['confirmarnuevocorreo'];
        $dato = mysql_query("SELECT usuario FROM dato WHERE
usuario_id='$usuario'");
        if(!$dato)
        {
        echo "No se encuentra el usuario ingresado.";
        }
        else if($usuario!= mysql_result($dato, 0))
        {
        echo "Incorrecta.";
        }
        if($nuevousuario==$confirmarnuevousuario)
        $sql=mysql_query("UPDATE usuario SET usuario='$nuevoususuario' where user_id='$usuario'");
        if($sql)
        {
        echo "Cambiaste el usuario.";
        }

        $dato = mysql_query("SELECT correo FROM dato WHERE
usuario_id='$usuario'");
        if(!$dato)
        {
        echo "No se encuentra el usuario ingresado.";
        }
        else if($correo!= mysql_result($dato, 0))
        {
        echo "Incorrecta.";
        }
        if($nuevocorreo==$confirmarnuevocorreo)
        $sql=mysql_query("UPDATE usuario SET usuario='$nuevouscorreo' where user_id='$correo'");
        if($sql)
        {
        echo "Cambiaste el correo.";
        }
      ?>
