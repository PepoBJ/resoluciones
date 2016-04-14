<?php

	require '../vendor/autoload.php';


	use BJ\Config\VariablesGlobales;
	use BJ\Core\ControladorFrontal;

	$con = new ControladorFrontal();
	
	if(isset($_GET["controller"]))
	{
		$controllerObj = $con->cargarControlador($_GET["controller"]);
		$con->lanzarAccion($controllerObj);
	}
	else
	{
	    $controllerObj = $con->cargarControlador(VariablesGlobales::$controlador_defecto);
		$con->lanzarAccion($controllerObj);
	}
	