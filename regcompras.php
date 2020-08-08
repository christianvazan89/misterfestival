
<?php
require("navbar.php");
require("conexion_base.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<body>
<?php
if ($_SESSION['username']=="administrador@gmail.com"){
?>
	<table class="table">
  <tr>
    <td><h4>Correo</h4></td>
    <td><h4>Festival</h4></td>
    <td><h4>Precio Entrada</h4></td>
    <td><h4>Cantidad</h4></td>
    <td><h4>Precio Total</h4></td>
    <td><h4>Id_tickets</h4></td>
  </tr>
<?php
//llamamos a todos los usuarios y hacemos la consulta
$query = "SELECT * FROM VENTAS"; //distinto a españa

$resulventas = mysqli_query($conexion,$query);

//imprime todo los usuarios de la lista
while($fila = mysqli_fetch_array($resulventas)){
?>
  <tr>
    <td><a><?php echo $fila[0];?></a></td>
    <td><?php echo $fila[1];?></td>
    <td><?php echo $fila[2];?></td>
    <td><?php echo $fila[3];?></td>
    <td><?php echo $fila[4];?></td>
    <td><?php echo $fila[5];?></td>
  </tr>
<?php
}//fin bucle while
?>
	</table>
<?php }//fin del if
else{ 
	header("location:index.php");
 } ?>
</body>
</html>