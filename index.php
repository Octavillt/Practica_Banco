<?php  

require_once('controllers/Ruteador.php');
require_once('controllers/Cliente.php');
require_once('controllers/Cuenta.php');
require_once('models/conexion.php');
require_once('models/clientesModel.php');
require_once('models/cuentasModel.php');

/*print_r('<pre>');
$conexion = Conexion::conecct();
print_r($conexion);*/


$ruteo = new Ruteador();
$ruteo -> traerPrincipal();





?>