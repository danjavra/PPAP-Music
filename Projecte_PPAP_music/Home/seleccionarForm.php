<?php 


	// SELECCIONA TIPO DE FORMULARIO SEGÚN LO QUE HAYA ESCOGIDO EL USUARIO
	if(isset($_POST["btn-registro"])){


		$artistaName = $_POST["artistaName"];

		if($artistaName == "Musico"){

			header("Location:../Musico/zona-registro-musico/zona-registro.html");

		}

		else if($artistaName == "Fan"){

			header("Location:../Fan/index.html");
		}

		else {

			header("Location:../Local/Zona-local-registro/registrolocal.html");
		}


	}

	// SI LE HA DADO AL BOTON DE LOGIN
	else{

		header("Location:../Login/login.html");
	}




 ?>