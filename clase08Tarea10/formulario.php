<?php
session_start();
if (!$_SESSION['personas'])
{
  $_SESSION['personas']=[];
  setcookie("saludo","tu session a iniciado");
}
$nombre="";
$apellido="";
$fecha_de_nacimiento="";
if ($_POST)
{
  array_push($_SESSION['personas'],
  [
    "nombre"=> $_POST['nombre'],
    "apellido"=> $_POST['apellido'],
    "fecha_de_nacimiento" => $_POST['fecha_de_nacimiento']
  ]
);
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_de_nacimiento=$_POST['fecha_de_nacimiento'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 08 - Tareas 10</title>
  </head>
  <body>
    <h1>Formulario</h1>
    <div id="formulario">
      <form class="" action="formulario.php" method="post">
        <input type="text" name="nombre" value="" placeholder="Nombre">
        <input type="text" name="apellido" value="" placeholder="Apellido">
        <input type="date" name="fecha_de_nacimiento" value="" placeholder="Fecha de Nacimiento">
        <button type="submit" name="button">Enviar</button>
        <button type="reset" name="button">Borrar</button>
      </form>

      <table border="1">
        <thead>

          <tr>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Fecha de nacimiento</th>
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
