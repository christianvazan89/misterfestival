<?php
require("navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Compra de Entradas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- JS file -->
<script src="easyautocomplete/jquery.easy-autocomplete.min.js"></script>

<!-- CSS file -->
<link rel="stylesheet" href="easyautocomplete/easy-autocomplete.min.css">

<!-- Additional CSS Themes file - not required-->
<link rel="stylesheet" href="easyautocomplete/to/easy-autocomplete.themes.min.css">
<style type="text/css">
	#cajabusca{
    margin-left:20px;
  }

  #resultado{
		text-align: right;
		padding: 40px   30px;
		font-style: bold;
		font-family: sans-serif;
		font-size: 20px;
	}
	 
  #imagenartista{
		position:relative;
		float: left;
		width:25%;

	}


</style>
  <script>

  	$(document).ready(function(){
  		//AUTOCOMPLETADO
		var options = {
		url: "nombre_artistas.json",

		getValue: "name",

		list: {
			match: {
				enabled: true
			},
			maxNumberOfElements: 4,

			showAnimation: {
				type: "slide",
				time: 300
			},
			hideAnimation: {
				type: "slide",
				time: 300
			}
		},

		theme: "round"

		};

		$("#busqueda").easyAutocomplete(options);


         //BUSQUEDA INSTANTANEA AJAX                       
        var consulta;                                                
         //hacemos focus al campo de búsqueda
        $("#busqueda").focus();                                                                     
        //comprobamos si se pulsa una tecla
        $("#busqueda").keyup(function(e){
           //valor del campo busqueda
              consulta = $("#busqueda").val();
              //hace la búsqueda
              $.ajax({
                    type: "POST",
                    url: "busca_artistas.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);
                                                             
                    }
              });                                                                                           
        });                                                        
});
  	
 </script>
</head>
 <body>
 	<div id="cajabusca">
 	Introduce el artista que buscas y te indicaremos en que festivales actua: <br>
 	<input  id="busqueda" />  
 	</div>
	<div class="table table-responsive" id="resultado"></div>
	

 </body>
 </html>