<?php


      $buscar = $_POST['b'];
       
      if(!empty($buscar)) {
            buscar($buscar);
            
      }
       
      function buscar($b) {
            
		$host = "localhost";
		$bd = "pruebaweb";
		$user = "root";
		$pass = "cedarpoint";
		$port =3306;
		//Conexion a nuestra bases BBDD
		$conexion = mysqli_connect($host,$user,$pass,$bd,$port);

	if(mysqli_connect_errno()){
		echo "La conexion ha fallado";
	exit();
	}


            $consulta = mysqli_query($conexion,"SELECT * FROM ARTISTAS WHERE ARTISTA LIKE '%".$b."%'");
            

            while($row=mysqli_fetch_array($consulta)){
            	$foto;
            	if (empty($foto)){ //si foto esta vacia , asi solo imprime 1 vez
            	$foto=$row[0];
            	echo "<img id='imagenartista' src='img/".$foto.".jpg'>";
            	}
               	 echo"<tr><td>";
               	 echo '<a href="http://localhost/proyecto/festival.php?f='.$row[1].'">'.$row[1]."</a><br>";
            	 echo "</td></tr>";
			}
			
			
			


			 
 	}    
       
?>