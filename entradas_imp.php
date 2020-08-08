<?php
require("navbar.php");
require ("conexion_base.php");
    $correoentradas=$_SESSION['username'];

    if(!isset($_SESSION['username'])){
  header("location:index.php");;
 }    
   
if (isset($_POST['pagar'])){
    $festival2 =$_POST["fe"];
    $priceentrada2 =$_POST["pe"];
    $cantidad2 =$_POST["ca"];
    $preciototal2 =$_POST["pr"];

     if(!isset($festival2)){
       header("location:index.php");;
      } 
      
    $insertalos="INSERT INTO ventas(FESTIVAL,PRECIOENTRADA,CANTIDAD,PRECIOTOTAL,CORREO)VALUES('$festival2','$priceentrada2','$cantidad2','$preciototal2','$correoentradas')";
    $resultado = mysqli_query($conexion,$insertalos);
    if (!$resultado){
      echo "ERROR DE PAGO";
    }
    else{
      echo "";
    }
  
}

 $consultaid="SELECT ID_TICKETS FROM VENTAS ORDER BY ID_TICKETS DESC LIMIT 1";
    $conid = mysqli_query($conexion,$consultaid);
    $fila = mysqli_fetch_row($conid);
    $id=$fila[0];
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compra de Entradas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
  <form action="vistaentrada.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id?>">
    <input type="submit" value="Generar Entrada PDF" name="generar">


</form>
 
</body>
</html>
