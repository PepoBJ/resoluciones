<?php namespace App\Model\Clase;

	use App\Helpers\Security as HS;

	class TipoResolucion 
	{

		public function __construct()
		{}

		private $id_tipo_resolucion;

		public function setIdTipoResolucion($id_tipo_resolucion) 
		{
			$id_tipo_resolucion = HS::clear_input($id_tipo_resolucion);

			$this->id_tipo_resolucion = $id_tipo_resolucion > 0 ? $id_tipo_resolucion : 1;
		}
		public function getIdTipoResolucion()
		{
			return $this->id_tipo_resolucion;
		}

		private $descripcion;
		public function setDescripcion($descripcion)
		{
			$descripcion = HS::clear_input($descripcion);

			$this->descripcion = $descripcion;
		}
		public function getDescripcion()
		{
			return $this->descripcion;
		}
	}