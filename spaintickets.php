 <?php
require("navbar.php");
require("conexion_base.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compra de Entradas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
<form action="" method="post">
  <div class="table table-responsive table-hover">
  <table class='table' id='Festivales'>
    <tr>
    <td><h3></h3></td>
    <td><h3>Festival</h3></td>
    <td><h3>Pais</h3></td>
    <td><h3>Direccion</h3></td>
    <td><h3>Fecha</h3></td>
    <td><h3>Duracion</h3></td>
    <td><h3>Precio</h3></td>
  </tr>

<?php
//llamamos a todos los usuarios y hacemos la consulta
$query = "SELECT * FROM TICKETS WHERE PAIS='España'";

$resul = mysqli_query($conexion,$query);

//imprime todo los usuarios de la lista
while($fila = mysqli_fetch_array($resul)){
?>
  <tr>
    <td><img width="75px" height="75px" src="img/<?php echo $fila[0];?>.png"></td>
    <td><a><?php echo $fila[0];?></a></td>
    <td><?php echo $fila[1];?></td>
    <td><?php echo $fila[2];?></td>
    <td><?php echo $fila[3];?></td>
    <td><?php echo $fila[4];?>-dias</td>
    <td><?php echo $fila[5];?>€</td>
         
    <td><a type="submit" href="carritocompra.php?festival=<?php  echo $fila[0];?>">Comprar</a></td>  
    <!-- aqui mandamos a carrito compra la informacion del tipo entrada que compramos --->
  </tr>
<?php
}//fin bucle while


?>

</table>

   <script type="text/javascript">
   
  </script>

</div>
</body>
</html>
