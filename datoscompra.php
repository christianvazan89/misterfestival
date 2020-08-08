<?php
require("navbar.php");

$festival = $_POST['festival'];
$priceentrada =$_POST['priceentrada'];
$cantidad =$_POST['cantidad'];
$preciototal =$_POST['preciototal'];

if(!isset($_SESSION['username'])){
 	header("location:index.php");;
 }		
if(!isset($festival)){
 	header("location:index.php");;
 }		
//variables para despues

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compra de Entradas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
	p{
		text-align:center;
		font-family: sans-serif;
		font-size:20px;
	}
	p:hover{
		color:blue;
		text-align:center;
		font-family: sans-serif;
		font-size:23px;
	}
	.tarjeta{
		position:absolute;
   		margin: 0 auto;
   		left: 0;
   		right: 0;
   		width:450px;
   		background-color: coral;
   		padding:20px;
   		border-radius:20px;
   		font-family: sans-serif;
	}
	.caja1{
		width:100%;
	}
	.caja2{
		width:10%;
	}
	.pagar{
		float:right;
	}
  .error{
    color:#FF0000;
  }




  </style>
</head>

<body>
	<script>
//ocultar o mostrar informacion de las entradas compradas
$(document).ready(function(){ 
   $('#compraoculta').hide();
   $('#mostrarcompra').on('click',function(){
      $('#compraoculta').toggle('slow');
   });
});

	</script>
<div  id="compraoculta" class="table table-responsive" ">
  <table   class='table' id='Festivales'>
    <tr>
    <td><h4><?php echo $festival?></h4></td>
    <td><h5><?php echo $priceentrada.'€'?></h5></td>
    <td><h5><?php echo $cantidad.' entradas'?></h5></td>
    <td><h5><?php echo $preciototal.'€'?></h5></td>
    </tr>
</table>
</div>

<p id="mostrarcompra"><img src="flechaarriba.svg" width='30' height='30'>  Mostrar Compra  <img src="flechaarriba.svg" width='30' height='30'></p>
<br>

<?php
   $correoentradas=$_SESSION['username'];
   
?>
<!----->
<script>
//ocultar o mostrar panel tarjeta
$(document).ready(function(){ 
   $('.tarjeta').hide();
   $('#rellenetarjeta').on('click',function(){
      $('.tarjeta').toggle('slow');
   });
});
</script>
  
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
    <script>
      $(document).ready(function() {
        $("#tarjeta").validate({  
            errorClass: "error",
            rules: { //reglas
                nombre: {  //
                    required: true
                },
                numero: {  //
                    required: true,
                    minlength:16,
                    maxlength:16
                },
                mes: {
                    required: true
                },
                anio: {
                    required: true
                },
                cvv: {
                    required: true,
                    minlength:3,
                    maxlength:3
                }
                

            },
            messages: {
                nombre: "Nombre obligatorio",
                mes: "mes obligatorio",
                anio:"año obligatorio",
                
                numero:{
                  required: "numero obligatorio",
                  minlength:"Tiene que contener 16 digitos",
                  minlength:"Tiene que contener 16 digitos"
                },
                cvv:{
                  required: "CVV obligatorio",
                  minlength:"CVV de 3 digitos",
                  minlength:"CVV de 3 digitos"
                  
                }
            }
        });
    });
    </script>
	</script>

<p id="rellenetarjeta">Rellene Datos tarjeta</p>
<form id="tarjeta" action="entradas_imp.php" method="post">
<div class="tarjeta">
	<div class="tarjetapago">
		<h5>Tarjeta de Debito / Credito</h5>
		<img>
	<div class="nombretarjeta">
		Introduzca nombre tarjeta:<br>
		<input name="Nombre" class="caja1" type="text">
	</div>
	<div class="numtarjeta">
		Introduzca numero tarjeta:<br>
		<input name="numero" class="caja1" type="text">
	</div>
	<div class="fecha caducidad">
		Introduzca fecha caducidad:<br>
		MES:<input name="mes" class="caja2" type="text">
		AÑO:<input name="anio" class="caja2" type="text">
	</div>
	<div class="CVV">
		CVV:<br>
		<input name="cvv" class="caja2" type="text">
		<!--inputs envio datos ocultos-->
		<input type="hidden" name="fe" value="<?php echo $festival?>">
		<input type="hidden" name="pe" value="<?php echo $priceentrada?>">
		<input type="hidden" name="ca" value="<?php echo $cantidad?>">
		<input type="hidden" name="pr" value="<?php echo $preciototal?>">
		<input class="pagar" type="submit" name="pagar" value="PAGAR" >

	</div>
</div>

</form>

</body>
</html>
