<?php namespace App\Controller;

	use App\Core\ControladorBase;
	use App\Model\UsuarioModel as MUsuario;

	class UsuarioController extends ControladorBase
	{
		
		public function index()
		{
			$this->redirect('index', 'index');
		}

		public function editar()
		{
			@session_start();
			echo '<pre>';
			print_r($_SESSION);
		}
		
	}