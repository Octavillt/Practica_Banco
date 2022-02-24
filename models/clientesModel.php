<?php 

require_once ('conexion.php');


class ClientesModel{

	public static function insertCliente(string $nombre, int $telefono, string $direccion){
		$sql_insert = Conexion::conecct()->query("INSERT INTO cliente(nombre,telefono,direccion)
			VALUES('{$nombre}','{$telefono}','{$direccion}')");
		return $sql_insert;
	}

	public static function listClientes(){
		$arrClientes = array();
          $sql_get_all = Conexion::conecct()->query("SELECT c.id_cliente, c.nombre, c.telefono, c.direccion, cu.numcuenta FROM cliente c INNER JOIN cuenta cu ON c.id_cliente = cu.cliente_id
          	ORDER BY c.id_cliente ASC ");
          while($datos = $sql_get_all->fetch_assoc()){
               array_push($arrClientes, $datos);
          }
          return $arrClientes;
	}

	public static function getCliente(int $cliente_id){
		$sql_get_cliente = Conexion::conecct()->query("SELECT c.id_cliente, c.nombre, c.telefono, c.direccion, cu.numcuenta, cu.saldo FROM cliente c INNER JOIN cuenta cu ON c.id_cliente = cu.cliente_id WHERE c.id_cliente = '{$cliente_id}'");
		$result_get_cliente = $sql_get_cliente->fetch_assoc();
		return $result_get_cliente;
	}

	public static function updateCliente(int $actualiza_id, string $nombre, int $telefono, string $direccion,
					int $num_cuenta, int $saldo){
		$sql_update = Conexion::conecct()->query("UPDATE  cliente c INNER JOIN cuenta cu ON c.id_cliente =
			cu.cliente_id SET c.nombre = '{$nombre}', c.telefono = '{$telefono}',
			c.direccion = '{$direccion}', cu.numcuenta = '{$num_cuenta}', cu.saldo = '{$saldo}'
			WHERE c.id_cliente = '{$actualiza_id}'");
		return $sql_update;
		
	}


}









?>