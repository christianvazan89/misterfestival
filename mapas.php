<?php
require("navbar.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compra de Entradas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
	
	#cajabotones{
		display: flex;
  		justify-content: center;
  		}
	.botones{
		background-color: #BDBDBD;
		padding-left: 10px;
		padding-right: 10px;
		border-radius:10px;
		border:none;
		cursor:pointer;
		font-family: sans-serif;
		font-size:16px;
	}
	.botones:hover{
		background-color: #424242;
		color:white;
		padding-left: 10px;
		padding-right: 10px;
		border-radius:10px;
		border:none;
		cursor:pointer;
		font-family: sans-serif;
		font-size:16px;
	}


	.mapas{
	width:80%;
	height: 79%;
	display:flex;
	margin-left:auto;
	margin-right: auto;
	position:relative;
	}


	.superponer{
		position:absolute;
		width :4%;
		border-radius: 50%;

	}
	.superponer:hover{
		position:absolute;
		width :5.5%;
		border-radius: 50%;

	}

	
  </style>
 
</head>
<body>
	

<script>
	$(document).ready(function(){ //cambia un mapa o otro segun se seleccione
		 

		$("#espan").click(function(){
			$(".mapas").replaceWith("<img class='mapas' src='map_spain.png'/>");

			$( "div" ).remove( ".iconos" );//poner antes que la caja para que borre iconos antes
			$('.cajaiconos').append('<div class="iconos">	<a href="festival.php?f=A Summer Story"> <img  class="superponer" src="img/A Summer Story.png" style="left:54%; top:47%"></a>	<a href="festival.php?f=Arenal Sound"><img  class="superponer" src="img/Arenal Sound.png" style="left:54%; top:76%"></a>	<a href="festival.php?f=Medusa Festival"><img class="superponer" src="img/Medusa Festival.png" style="left:66%; top:54%"></a>	<a href="festival.php?f=Dreambeach"><img  class="superponer" src="img/Dreambeach.png" style="left:62%; top:74%"></div></a>');

			
		});

		$("#europa").click(function(){

			$(".mapas").replaceWith("<img class='mapas' src='map_europe.jpg'/>");

			$( "div" ).remove( ".iconos" );
			$('.cajaiconos').append('<div class="iconos"> <a href="festival.php?f=balaton sound"><img class="superponer" src="img/balaton sound.png" style="left:52%; top:73%"></a>	<a href="festival.php?f=creamfields"><img class="superponer" src="img/creamfields.png" style="left:34%; top:57%"></a>	<a href="festival.php?f=Lollapalooza"><img class="superponer" src="img/lollapalooza.png" style="left:38%; top:72%"></a>	<a href="festival.php?f=mysteryland"><img class="superponer" src="img/Mysteryland.png" style="left:42%; top:64%"></a>	<a href="festival.php?f=parookaville"><img class="superponer" src="img/parookaville.png" style="left:43%; top:70%"></a>	<a href="festival.php?f=tomorrowland"><img class="superponer" src="img/tomorrowland.png" style="left:40%; top:67%"></a></div>');
			
		});

		$("#america").click(function(){
			$(".mapas").replaceWith("<img class='mapas' src='north_america.png'/>");

			$( "div" ).remove( ".iconos" );
			$('.cajaiconos').append('<div class="iconos"><a href="festival.php?f=ultramusic"><img class="superponer" src="img/ultramusic.png" style="left:50%; top:76%"></a>	<a href="festival.php?f=electriczoo"><img class="superponer" src="img/electriczoo.png" style="left:54%; top:69%"></a>	<a href="festival.php?f=edc-las-vegas"><img class="superponer" src="img/edc-las-vegas.png" style="left:38%; top:72%"></a>	<a href="festival.php?f=lostland"><img class="superponer" src="img/lostland.png" style="left:53%; top:60%"></a></div>')
		});

		/*$(".superponer").hover(function(){
			$(this).css("width", "5.5%");
			},function(){
			$(this).css("width", "4%");	
		});*/

	});

</script>
<div id="cajabotones">
<button class="botones" id="espan"  value="España">España</button>
<button class="botones" id="europa" value="Europa">Europa</button>
<button class="botones" id="america" value="America">America</button>
</div>
<br>
<div>
<img  class='mapas' src='map_spain.png'/>
	<div class="cajaiconos">
		<div class="iconos">
		<a href="festival.php?f=A Summer Story""><img class="superponer" src="img/A Summer Story.png" style="left:54%; top:47%"></a>
		<a href="festival.php?f=Arenal Sound"><img class="superponer" src="img/Arenal Sound.png" style="left:54%; top:76%"></a>
		<a href="festival.php?f=Medusa Festival"><img class="superponer" src="img/Medusa Festival.png" style="left:66%; top:54%"></a>
		<a href="festival.php?f=Dreambeach"><img class="superponer" src="img/Dreambeach.png" style="left:62%; top:74%"></a>
		</div>
	</div>
</div>







</body>
</html>