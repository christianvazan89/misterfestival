<?php

//Parametros de conexion
$host = "localhost";
$bd = "pruebaweb";
$user = "root";
$pass = "1234";
$port =3306;
//Conexion a nuestra bases BBDD
$conexion = mysqli_connect($host,$user,$pass,$bd,$port);

if(mysqli_connect_errno()){
	echo "La conexion ha fallado";
	exit();
}
else{
	//echo "conexion establecida";
}

?>