<?php 
require_once('config/config.php');


class Conexion{

	public static function conecct(){

		$mysql = new mysqli(hostname, username, password, database);
		$mysql -> set_charset(charset);

		if(mysqli_connect_error()){
			echo "Error en la Conexión: ".mysqli_connect_errno();
		}else{
			//echo "Conexión Exitosa: ";
		}
		return $mysql;
	}

}


?>