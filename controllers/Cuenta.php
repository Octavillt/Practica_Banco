<?php 

require_once("config/config.php"); 

class Cuenta{

	public static function registraCuenta(){

		if($_POST){
			if(empty($_POST['numCuenta']) || empty($_POST['numSaldo']) ||
				empty($_POST['txtCliente'])){	
				echo '<div class="alert alert-warning text-center">
			Todos los Campos son Obligatorios.
			</div>';
		}else{

			$nocuenta = $_POST['numCuenta'];
			$saldo = $_POST['numSaldo'];
			$cliente = $_POST['txtCliente'];

			$res_insert = CuentasModel::insertCuenta($nocuenta, $saldo, $cliente);
						/*print_r($res_insert);
						die();*/
						if($res_insert){
							echo '<div class="alert alert-success text-center">
							Registro Guardado Correctamente.
							</div>';
						}else{
							echo '<div class="alert alert-danger text-center">
							Error al Guardar el Registro.
							</div>';
						}
					}
				}
			}	

	public static function traerCliente(){
		if(isset($_POST))
		{$res_get =  CuentasModel::getClientes();
			/*print_r('<pre>');
			print_r($res_get);
			die();*/
		return $res_get;
		}else{
			return false;
		}
	}

}



?>