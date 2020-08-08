<?php
require("navbar.php");
?>
<!DOCTYPE html>

<html>
<head>
  <title>Compra de Entradas</title>
  <meta charset="utf-8">
  <style type="text/css">
		#colocar{
			text-align:center;
		}
		#compra{
			text-align:center;
			font-family: sans-serif;
			font-size: 20px;
			font-weight: bold; 
			margin-top:10px;
		}
  		.logito{
  			width: auto;
  			height: 25%;
  			text-align:center;
  		}
  	/* Style the buttons that are used to open and close the accordion panel */
		.accordion {
  	background-color: #eee;
  	color: #444;
  	cursor: pointer;
  	padding: 18px;
 	 width: 100%;
 	 text-align: left;
 	 border: none;
  	outline: none;
  	transition: 0.4s;
}
/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
}
/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}
  </style>
  </head>

<body>
	<?php
	$quefestival = $_GET['f'];
	
	?>
	<div id=colocar>
	<img class="logito" src="img/<?php echo $quefestival?>.png" ></a>
	</div>
	<button class="accordion">+ Informacion</button>
		<div class="panel">
  		<p><?php require ("festival_informacion.php"); ?></p>
			
		</div>

	<button class="accordion">+ Artistas</button>
		<div class="panel">
  		<p><?php require ("festival_artistas.php"); ?></p>
		</div>

	<button class="accordion">+ ¿Como llegar?</button>
		<div class="panel">
  		<p><?php require ("festival_llegar.php"); ?></p>
		</div>
	<br>
	<div id="compra">
<?php  //si la entrada es americana no hay opcion de compra
if (!($quefestival=="edc-las-vegas" || $quefestival=="ultramusic" || $quefestival=="electriczoo" || $quefestival=="lostland"  )) {
?>
		<a href="carritocompra.php?festival=<?php echo $quefestival;?>">COMPRAR ENTRADAS<a/>
<?php   } ?>
	</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</body>
</html>