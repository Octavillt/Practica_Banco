<?php require('views/templete/header.php'); ?>

<?php 

if(isset($_GET['pagina']))
{

	if($_GET['pagina'] == "crear_cliente" || $_GET['pagina'] == "crear_cuenta" ||
		$_GET['pagina'] == "listar_clientes" || $_GET['pagina'] == 'ver_cliente' ||
		$_GET['pagina'] == 'editar_cliente' || $_GET['pagina'] == 'eliminar_cliente' || $_GET['pagina'] == 'buscar_clientes')
	{

		include "views/cuentas/".$_GET['pagina'].".php";
	}else{
		include "views/cuentas/error_404.php";
	}
}else{
	include "views/cuentas/listar_clientes.php";
}

?>

<?php require('views/templete/footer.php'); ?>