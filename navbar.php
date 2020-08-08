<style type="text/css">


#correo{
  text-decoration: none;
  color:white;
  margin-left:18px;

}
#logout{
  
  position:absolute;
  margin-top:5px;
    
}


</style>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>MISTERFESTIVAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php session_start(); 
  $quien = "nada"; //le damos a la variable valor nada
  if(isset($_SESSION['username'])){ // si existe la sesion le damos el valor quien
  $quien = $_SESSION['username'];
  }
?>
<nav id="navbar" class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">MISTER-FESTIVAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barranavegacion">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="barranavegacion">
    <ul class="navbar-nav">
      <?php 
           if ($quien=="administrador@gmail.com"){ // si se inicia sesion administracion = modo 
      ?>
      <li class="nav-item">
        <a class="nav-link" href="regcompras.php">Registro Compras</a>
      </li>
      <?php }else{?>
      <li class="nav-item">
        <a class="nav-link" href="informacion.php">Informacion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="artistas.php">Artistas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mapas.php">Mapas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Entradas</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="spaintickets.php">España</a>
          <a class="dropdown-item" href="europetickets.php">Europa</a>
        </div>
      </li>
    <?php } ?>
      <div class="nav-item dropdown">  
    <?php
    
          if(isset($_SESSION['username'])){
            
            echo "<a class='nav-link' id='logout' href='cerrarsesion.php'><img src='cerrar.png' width='15' height='15'></a>
              <a class='nav-link' id='correo' href='editarpefil.php'>"."" .$_SESSION['username']."</a>";
            //echo "<a class='nav-link' id='logout' href='cerrarsesion.php'><img src='cerrar.png' width='15' height='15'></button>";
            
          }
          else{
            require("login.php");
          }
    ?>
     </div>
    </ul>
  </div>  
</nav>
<br>

</body>
</html>