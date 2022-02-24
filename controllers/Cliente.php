<?php 
require_once("config/config.php"); 

class Cliente{

	public static function registraCliente(){

		if($_POST){
			if(empty($_POST['txtNombre']) || empty($_POST['numTelefono']) ||
				empty($_POST['txtDireccion'])){	
				echo '<div class="alert alert-warning text-center">
			Todos los Campos son Obligatorios.
			</div>';
		}else{

			$nombre = $_POST['txtNombre'];
			$telefono = $_POST['numTelefono'];
			$direccion = $_POST['txtDireccion'];

			$res_insert = ClientesModel::insertCliente($nombre, $telefono, $direccion);
						/*print_r($res_insert);
						die();*/
						if($res_insert){
							echo '<div class="alert alert-success text-center">
							Registro Guardado Correctamente.
							</div>';
						}else{
							echo '<div class="alert alert-danger text-center">
							Error al Guardar los Datos.
							</div>';
						}
					}
				}
	}

	public static function listarClientes(){
		if(isset($_POST))
		{$res_get =  ClientesModel::listClientes();
			/*print_r('<pre>');
			print_r($res_get);
			die();*/
		return $res_get;
		}else{
			return false;
		}
	}

	public static function getCliente(){
		if(!empty($_REQUEST)){
			$cliente_id = intval($_REQUEST['id']);
			$res_get =  ClientesModel::getCliente($cliente_id);
			return $res_get;
		}
	}

	public function actualizarCliente(){
		if($_POST){
			if(empty($_POST['txtNombre']) || empty($_POST['numTelefono']) ||
				empty($_POST['txtDireccion']) || empty($_POST['numCuenta']) ||
				empty($_POST['numSaldo']) ){	
				echo '<div class="alert alert-warning text-center">
			Todos los Campos son Obligatorios.
			</div>';
		}else{
				$actualiza_id = intval($_GET['id']);
				$nombre = $_POST['txtNombre'];
				$telefono = $_POST['numTelefono'];
				$direccion = $_POST['txtDireccion'];
				$num_cuenta = $_POST['numCuenta'];
				$saldo = $_POST['numSaldo'];

				$res_update = ClientesModel::updateCliente($actualiza_id, $nombre, $telefono, $direccion,
					$num_cuenta, $saldo);
					/*print_r($res_update);
					die();*/
					if($res_update == true){
						echo '<div class="alert alert-success text-center">
						Registro Actulizado Correctamente.
						</div>';
					}else{
						echo '<div class="alert alert-danger text-center">
						Error al Actualizar los Datos o el Correo ya Existe.
						</div>';
					}
					return $res_update;
				}
			}
		}
}

?>