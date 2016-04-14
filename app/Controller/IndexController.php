<?php namespace BJ\Controller;

	use BJ\Core\ControladorBase;
	
	class IndexController extends ControladorBase
	{
		
		/*		INDEX 		*/
		
		public function index()
		{
			$this->view('Index');
		}
		
		/*	**	*/
	}