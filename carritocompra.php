<?php
require("navbar.php");
require("conexion_base.php");
?>
  <?php
 if(!isset($_SESSION['username'])){
 	echo "Por favor inicia sesion con tu login, sino no podras continuar";
 }
if(isset($_GET['festival'])){
			
			$preguntaprecio= "SELECT PRICE FROM TICKETS WHERE FESTIVAL='{$_GET['festival']}'";
			$consultaprecio = mysqli_query($conexion,$preguntaprecio);//preguntamos precio entrada a la base datos
			
			while($row = mysqli_fetch_array($consultaprecio)) {
				$precioentrada = $row[0];//asignamos valor a precioentrada
			} 

			$fest =$_GET['festival'];
			$carro[$fest]=$precioentrada; 
			
			$_SESSION['carrito']=$carro; //creamos la sesion y le damos los valores del carro
}else{
	header("location:index.php");
}
?>
<!DOCTYPE html>

<html>
<head>
  <title>Compra de Entradas</title>
  <meta charset="utf-8">
	<style type="text/css">
	#mo{
		font-family: sans-serif;
		text-align:center;
		font-size: 18px
	}
	#tablacompra{
		background:url("ticketimagen.png");
		padding:20px;
		background-size: 400px;
		background-position:center;
		float:center;
		border-radius:10px;
		margin-right:20px;
		margin-left:20px;
	}
	.responsive{
	 	 width: auto;
  		height: 25%;
	}


	</style>
</head>
<body>
<div id="mo">
	<header>---TU COMPRA---</header>
	<img class="responsive" src="img/<?php echo $fest?>.png"><!--imagen del festival seleccionado-->

	<section><td>
		<?php
			$totalcarro=0;
			if(isset($_SESSION["carrito"])){ //si existe la sesion carrito
				$info=$_SESSION["carrito"];
				$totalcarro=0;
				foreach ($info as $codfestival => $precioentrada) { //imprimimos los productos del array
					echo " $codfestival ---> $precioentrada €";
				}
			}//a continuacion hacemos un formulario para la cantidad de entradas
		?>
	</section></td>
	 <td><form action="" method="post">
	 <a>Numero de entradas</a>
      <select name="eo" id="eo">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
     </select>
 <input class="botoncantidad" name="cantidadentradas" type="submit" value="Comprar" />
 </form></td>
<?php
 if (isset($_POST['cantidadentradas'])){ //indica las entradas seleccionadas
		$cant =$_POST["eo"];
		echo "$cant  entradas seleccionadas";

		$totalprecio = $precioentrada*$cant;
?>		</td></tr>
		<div><?php echo "TOTAL: $precioentrada € X $cant  = $totalprecio €"; ?></div>
		<br>
		<div id="tablacompra"><!--Imprimimos los valores y los mandamos ocultos en formulario-->
		<form enctype="multipart/form-data" action="datoscompra.php" method="post">
			<a>Entrada para:</a>
			<input type="hidden" value="<?php echo $codfestival?>" name="festival"><?php echo $codfestival?><br>
			<a>Precio:</a>
			<input type="hidden" name= "priceentrada" value="<?php echo $precioentrada?>"><?php echo $precioentrada.'€'?><br>
			<a>Cantidad:</a>
			<input type="hidden" value="<?php echo $cant?>" name="cantidad"><?php echo $cant?><br>
			<a>Total:</a>
			<input type="hidden" value="<?php echo $totalprecio?>" name="preciototal"><?php echo $totalprecio. '€'?>
			<br>
			<input type="submit" value="Siguiente" name="siguiente" ></a>
		</form>
		</div>
<?php
}



?>


</div>

</body>
</html>