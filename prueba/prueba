<?php
session_start();
if (!$_SESSION['frmlr'])
{
  $_SESSION['frmlr']=[];
  setcookie("saludo","tu session a iniciado");
}
$correo_electronico="";

if ($_POST)
{
  array_push($_SESSION['personas'],
  [
    "nombre"=> $_POST['nombre'],
    "apellido"=> $_POST['apellido'],
    "fecha_de_nacimiento" => $_POST['fecha_de_nacimiento']
  ]
);
$correo_electronico=$_POST['correo_electronico'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prueba Formativa</title>
  </head>
  <body>
    <h1>Datos Personales</h1>
    <div id="formulario">
      <form class="" action="formulario.php" method="post">
        <input type="text" name="correo_electronico" value="" placeholder="Correo electronico">
        <button type="submit" name="button">Enviar</button>
        <button type="reset" name="button">Borrar</button>
      </form>

      <table border="1">
        <thead>

          <tr>
            <th class="text-center">Correo electronico</th>
          </tr>
          <?php $personas=$_SESSION['personas'];
          foreach ($personas as $key => $value) {
            echo "<tr>";
            echo "<td>".$value['nombre']."</td>";
            echo "<td>".$value['apellido']."</td>";
            echo "<td>".$value['fecha_de_nacimiento']."</td>";
            echo "<td>"."<button id='formulario'>Borrar</button>"."<td>";
            echo "</tr>";
          }
           ?>
        </thead>
        <tbody id="formulario">
        </tbody>
      </table>
      <p>
       <?php echo $nombre; ?> <?php echo $apellido; ?> <?php echo $fecha_de_nacimiento; ?>
      </p>
      <ol>
<?php
$personas=$_SESSION['personas'];
foreach ($personas as $key => $value) {
  echo "<li>".$value['nombre'].", ".$value['apellido'].", ".$value['fecha_de_nacimiento']."</li>";
}
?>
</ol>
<a href="cerrar.php">Cerrar Sesión</a>
    </div>
  </body>
</html>
