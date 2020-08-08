<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Registro de Usuarios</title>
    <?php require("navbar.php"); ?>


<style type="text/css">
    body {
  margin: 0;
  padding: 0;
  background-size: cover;
  font-family: sans-serif;
  height: 50vh;
}

.cajaregistro {
  margin-left:15%;
  margin-right:15%;
  margin-top:20px;
  background: #1C2833;
  color: #fff;
  
  box-sizing: border-box;
  border-radius: 10px;
  padding: 70px 30px;
}

.cajaregistro .avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

.cajaregistro h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}

.cajaregistro label {
  margin-top: 10px;
  padding: 0;
  font-weight: bold;
  display: block;
}

.error{
  font-size: 14px;
  color:red;
}

.cajaregistro input {
  width: 100%;
  margin-bottom: 5px;/*margen entre input*/
  color: #fff;
}
.cajaregistro input[type="email"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;/*fondo transparente*/
  outline: none;/*marca del fondo quitar*/
  height: 40px;
  color: #fff;
  font-size: 16px;
  
}
.cajaregistro input[type="text"], .cajaregistro input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;/*fondo transparente*/
  outline: none;/*marca del fondo quitar*/
  height: 40px;
  color: #fff;
  font-size: 16px;
  
}
#envio{
  text-align: center;
}

.cajaregistro input[type="submit"] {
  border: none;
  outline: none;
  height: 40px;
  width:40%;
  background: #b80f22;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}

.cajaregistro input[type="submit"]:hover {
  cursor: pointer;
  background: #ffc107;
  color: #000;
}

.cajaregistro a {
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color: darkgrey;
  margin-left:25%;
}

.cajaregistro a:hover {
  color: #fff;

}

</style>

  </head>
  <body>

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
    <script>
      $(document).ready(function() {
        $("#registro").validate({  
            rules: { //reglas
                check: {  //
                    required: true
                },
                alias: {  //
                    required: true
                },
                nombre: {
                    required: true
                },
                email: {
                    required: true
                },
                apellidos: {
                    required: true
                },
                contrasena:{
                    required:true,
                    minlength:5,
                    maxlength:10
                },
                repcontrasena:{
                    required:true,
                    equalTo:"#contrasena"
                }

            },
            messages: {
                check: "Debes aceptar las condiciones",
                email: "Email requerido",
                alias:  "Alias obligatorio",
                nombre:"Indica tu nombre",
                apellidos: "Indica tus apellidos",
                contrasena:{
                  required: "Contraseña obligatoria",
                  minlength:"Contraseña entre 5 y 10 caracteres",
                  minlength:"Contraseña entre 5 y 10 caracteres"
                },
                repcontrasena:{
                  required: "Repetir contraseña obligatorio",
                  equalTo: "Las contraseñas deben coincidir"
                }
            }
        });
    });
    </script>


<div class="cajaregistro">
  <form id="registro" action="" method="post">
  <div class="form-row">
    <div class="col-md-6">
        <label for="username">Usuario/Alias</label>
        <input name="alias" type="text" placeholder="Ingresa Alias">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input name="contrasena" type="password" class="form-control" id="contrasena">
    </div>
    <div class="col-md-6">
      <label for="inputPassword">Repetir Contraseña</label>
      <input name="repcontrasena" type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input name="direccion" type="text" class="form-control" id="inputAddress" placeholder="1234 Calle Real">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Direccion 2</label>
    <input name="direccion2" type="text" class="form-control" id="inputAddress2" placeholder="Piso, portal, puerta">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input name="ciudad" type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Pais</label>
      <input name="pais" type="text" class="form-control" id="inputState">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Codigo Postal</label>
      <input name="codpostal" type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input name="check"class="form-check-input" type="checkbox" id="check">
      <label class="form-check-label" for="check">
        Confirma que esta deacuerdo 
      </label>
    </div>
  </div>
  <div id="envio">
      <input type="submit" name="submit" value="Registrate">
  </div>
  </form>


<?php
  require("conexion_base.php");
      //si se pulsa el boton submit se le dan los valores del formulario a las variables
  if (isset($_POST['submit'])){
    $alias=$_POST["alias"];
    $email =$_POST["email"];
    $contrasena =$_POST["contrasena"];
    $direccion =$_POST["direccion"];
    $direccion2 =$_POST["direccion2"];
    $ciudad =$_POST["ciudad"];
    $pais =$_POST["pais"];
    $codpostal=$_POST["codpostal"];//cada variable coge los datos del formulario
    
    $insert ="INSERT INTO usuarios(alias,email,contrasena,direccion,direccion2,ciudad,pais,codpostal)VALUES('$alias','$email','$contrasena','$direccion','$direccion2','$ciudad','$pais','$codpostal')";
    $resultado = mysqli_query($conexion,$insert);//se inserta los valores en la tabla 
    if (!$resultado){
    echo "Error de registro";
    }
    else{
    echo "Registrado";
    
    
    }
  
  }
?>
 </div>   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
