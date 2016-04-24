<?php names App\Model\Clase;

	use App\Helpers\Security as HS;

	class Area
	{

		public function __construct()
		{}

		private $id_area;
		public function setIdArea($id_area)
		{
			$id_area = HS::clean_input($id_area);

			$this->id_area = $id_area > 0 ? $id_area : 1;
		}
		public function getIdArea()
		{
			return $this->id_area;
		}

		private $nombre;
		public function setNombre($nombre)
		{
			$nombre = HS::clean_input($nombre);

			$this->nombre = $nombre;
		}
		public function getNombre()
		{
			return $this->nombre;
		}

	}