<?php
require("conexion_base.php");
session_start();


$email=$_POST["email"];
$contrasena=$_POST["contrasena"];
$existe="SELECT * FROM usuarios WHERE email='$email'";
$entra="SELECT * FROM usuarios WHERE email='$email'AND contrasena='$contrasena'";
$resultaexiste=mysqli_query($conexion,$existe);
$resultaentra=mysqli_query($conexion,$entra);
$compruebaexiste=mysqli_num_rows($resultaexiste);
$compruebaentra=mysqli_num_rows($resultaentra);
if($compruebaexiste>0){
	if($compruebaentra>0){
		$_SESSION['username']=$email;
		header("location:index.php");
	}
	else{
	 	header("location:index.php?error=true");
	}
}
else{
	 header("location:index.php?error=true");
		
}
	

mysqli_free_result($resultaexiste);
mysqli_free_result($resultaentra);
mysqli_close($conexion);

?>