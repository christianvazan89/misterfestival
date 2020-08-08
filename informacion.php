<?php
require("navbar.php");
?>
<!DOCTYPE html>

<html>
<head>
  <title>Compra de Entradas</title>
  <meta charset="utf-8">
  <style type="text/css">
	
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 40%;
  height: 85%;
}
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
}
.tab button:hover {
  background-color: #ddd;
}
.tab button.active {
  background-color: #ccc;
}
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 60%;
  border-left: none;
  height: 85%;
  display: none;
}
#logosfestis{
	display: flex;
  	justify-content: center;
}
.logos{
	width :60px;
	height:60px;
	border-radius: 50%;
	margin:0 20px;
}
.logos:hover{
	width :70px;
	height:70px;
	border-radius: 50%;
	margin:0 20px;
}
@media (max-width:765px){
  .logos{
	width :50px;
	height:50px;
	border-radius: 50%;
	margin:0 10px;
}
.logos:hover{
	width :60px;
	height:60px;
	border-radius: 50%;
	margin:0 10px;
}
}



  </style>
</head>
<body>
	<script>
	function openC(evt, city) {
  
  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(city).style.display = "block";
  evt.currentTarget.className += " active";
}
	</script>

<div class="tab">
  <button class="tablinks" onmouseover="openC(event, 'spain')">España</button>
  <button class="tablinks" onmouseover="openC(event, 'europe')">Europe</button>
  <button class="tablinks" onmouseover="openC(event, 'america')">America</button>
</div>
<div id="spain" class="tabcontent">
	<div id="logosfestis"><!--iconos festival-->
		<a href="festival.php?f=A Summer Story"><img class="logos" src="img/A Summer Story.png" ></a>
		<a href="festival.php?f=Arenal Sound"><img class="logos" src="img/Arenal Sound.png" ></a>
		<a href="festival.php?f=Medusa Festival"><img class="logos" src="img/Medusa Festival.png" ></a>
		<a href="festival.php?f=Dreambeach"><img class="logos" src="img/Dreambeach.png" ></a>
	</div><br>
	<!--carrusel de fotos-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-75"src="img/A-summer-storyfondo.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/arenalfondo.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/dreambeachfondo.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/medusafondo.jpg" alt="Four slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div id="europe" class="tabcontent">
	<div id="logosfestis"><!--iconos festival-->
		<a href="festival.php?f=balaton sound"><img class="logos" src="img/balaton sound.png" ></a>
		<a href="festival.php?f=creamfields"><img class="logos" src="img/creamfields.png" ></a>
		<a href="festival.php?f=tomorrowland"><img class="logos" src="img/tomorrowland.png" ></a>
		<a href="festival.php?f=mysteryland"><img class="logos" src="img/mysteryland.png" ></a>
	</div><br><div id="logosfestis">
		<a href="festival.php?f=Lollapalooza"><img class="logos" src="img/Lollapalooza.png" ></a>
		<a href="festival.php?f=parookaville"><img class="logos" src="img/parookaville.png" ></a>
	</div><br>
	<!--carrusel de fotos-->
   <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel"  >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-75" src="img/balatonfondo.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/mysterylandfondo.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/Tomorrowlandfondo.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/Creamfieldsfondo.png" alt="Four slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/parookavillefondo.jpg" alt="Five slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/lollapalozafondo.jpg" alt="Six slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div id="america" class="tabcontent">
	<div id="logosfestis"><!--iconos festival-->
		<a href="festival.php?f=edc-las-vegas"><img class="logos" src="img/edc-las-vegas.png" ></a>
		<a href="festival.php?f=ultramusic"><img class="logos" src="img/ultramusic.png" ></a>
		<a href="festival.php?f=lostland"><img class="logos" src="img/lostland.png" ></a>
		<a href="festival.php?f=electriczoo"><img class="logos" src="img/electriczoo.png" ></a>
	</div><br>
	<!--carrusel de fotos-->
   <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-75" src="img/edcfondo.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/ultrafondo.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/electriczoofondo.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-75" src="img/lostlandfondo.jpg" alt="Four slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</body>
</html>