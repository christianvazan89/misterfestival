<?php require("navbar.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compra de Entradas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <style type="text/css">
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
	.textoencima{
    position: absolute;
 	text-align: center;
 	color:white;
 	-webkit-text-stroke: 0.5px black;
    top: 40%;
    margin-left:25%;
    margin-right:25%;
   }
   .boton{
   	border-radius: 20px;
   	color: white;
  	font-size: 25px;
  	border: none;
  	outline: none;
  	background: #b80f22;
   }

  </style>
  
 
</head>
<body>
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="img/fondo2.jpg" alt="info" width="1100" height="400">
    <div class="textoencima">
      <h1>Informacion</h1>        
      <h3>Descubre toda la informacion sobre los festivales que mas te gustan</h3>
      <input type="button" onclick='location.href="informacion.php"' class="boton" value="Informate!">
      </div>
    </div>
    <div class="carousel-item">
    	<img src="img/fondo1.jpg" alt="artista" width="1100" height="400">
    	<div class="textoencima">
      	<h1>Artistas</h1>        
      	<h3>Te gustaria saber donde actua tu artista favorito</h3>
      	<input type="button" onclick='location.href="artistas.php"' class="boton" value="Averigualo!">
      </div>
    </div>
    <div class="carousel-item">
    	<img src="img/fondo3.jpg" alt="mapa" width="1100" height="400">
    	<div class="textoencima">
    	<h1>Mapa</h1>        
       	<h3>Donde estan situado los festivales que mas te gustan</h3>
       	<input type="button" onclick='location.href="mapas.php"' class="boton" value="Descubrelo!">
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        
</body>
</html>