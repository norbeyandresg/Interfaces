<?php
	

	require_once './conexion_bd.php';

	$observerClass = new Observer();
	// capturar información del formulario de busqueda
	if(isset($_GET['search'])){
		$obj = $_GET['search'];
		$observerClass->getUser($mysqli, $obj);
	}

	if (isset($_POST)) {
		/*$obj = (object) array('identification' => $_POST['identification'],
								 'first_name' => $_POST['first_name'],
								 'last_name' => $_POST['last_name'],
								 'age' => $_POST['age'],
								 'city' => $_POST['city']);*/
		$obj = (object)$_POST;

		$observerClass -> insertUser($mysqli,$obj);
	}

	class Observer{
		function getUser($mysqli, $obj){

			$queryRevista = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");
			$valores = mysqli_fetch_array($queryRevista);
			/*$hola = "hola";
			return $hola;*/



			if(isset($_GET['search'])){//if(isset) valida que no sea null o undefine
				if(count($valores) > 0){
					echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
				}else{
					echo "No estas registrado, por favor registrate antes de realizar una suscripción";
				}
			}
	
		}

		function insertUser($mysqli, $obj){
			$str = "INSERT INTO usuario VALUES( ".$obj->identification.",
				'" . $obj->first_name . "',
				'" . $obj->last_name . "',
				".$obj->age.",
				".$obj->city.")";

			$valores = $mysqli -> query($str);

		}
		function suscribeUser($mysqli, $obj){}
	}

	


	
?>