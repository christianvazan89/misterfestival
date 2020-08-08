<style type="text/css">
  #cajalogin{
    font-family: sans-serif;
    padding:10px;
  }
  input{
    margin-top:5px;
  }



  </style>
    


    <a class="nav-link dropdown-toggle"  id="navbardrop" data-toggle="dropdown">Login</a>

    <div class="dropdown-menu" id="cajalogin">
      <!--Logeate aqui--->
      <form action="validacion.php" method="post">
        <!-- Usuario--->
        
        <input type="email" name="email" placeholder="Email"><br>
        <!-- Contraseña -->
        
        <input type="password" name="contrasena" placeholder="Contraseña"><br>
        <input type="submit" value="Log In">
          <?php


       if(isset($_GET["error"]) && $_GET["error"] == 'true')
       {
          echo "<div style='color:red'>Usuario o contraseña invalido </div>";
       }
        ?>     
        
        <a class="dropdown-item" href="registro.php">¿Sin cuenta? Registrate!! </a>
      </form>
    </div>
 