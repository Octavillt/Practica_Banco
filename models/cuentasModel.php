<?php  

require_once ('conexion.php');


class CuentasModel{

     public static function insertCuenta(int $nocuenta, int $saldo, int $cliente){
          $sql_insert = Conexion::conecct()->query("INSERT INTO cuenta(numcuenta,saldo,cliente_id)
               VALUES('{$nocuenta}','{$saldo}','{$cliente}')");
          return $sql_insert;
          }
     public static function getClientes(){
          $arrClientes = array();
          $sql_get_all = Conexion::conecct()->query("SELECT id_cliente, nombre FROM cliente");
          while($datos = $sql_get_all->fetch_assoc()){
               array_push($arrClientes, $datos);
          }
          return $arrClientes;
     }


}




?>