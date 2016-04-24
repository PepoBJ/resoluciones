<?php namespace App\Model\Clase;

	use App\Helpers\Security as HS;

	class Resolucion 
	{

			public function __construct()
			{}

			private $id_resolucion;
			public function setIdResolucion($id_resolucion)
			{
				$id_resolucion = HS::clean_input($id_resolucion);

				$this->id_resolucion = $id_resolucion > 0 ? $id_resolucion : 1;
			}
			public function getIdResolucion()
			{
				return $this->id_resolucion;
			}

			private $tipo_resolucion;
			public function setTipoResolucion($tipo_resolucion)
			{
				$tipo_resolucion = HS::clean_input($tipo_resolucion);

				$this->tipo_resolucion = $tipo_resolucion;
			}
			public function getTipoResolucion()
			{
				return $this->tipo_resolucion;
			}

			private $area;
			public function setArea($area)
			{
				$area = HS::clean_input($area);

				$this->area = $area;
			}
			public function getArea()
			{
				return $this->area;
			}

			private $nro_resolucion;
			public function setNroResolucion($nro_resolucion)
			{
				$nro_resolucion = HS::clean_input($nro_resolucion);

				$this->nro_resolucion = $nro_resolucion;
			}
			public function getNroResolucion()
			{
				return $this->nro_resolucion;
			}

			private $nro_registro;
			public function setNroRegistro($nro_registro)
			{
				$nro_registro = HS::clean_input($nro_registro);

				$this->nro_registro = $nro_registro;
			}
			public function getNroRegistro()
			{
				return $this->nro_registro;
			}

			private $fecha_registro;
			public function setFechaRegistro($fecha_registro)
			{
				$fecha_registro = HS::clean_input($fecha_registro);

				$this->fecha_registro = $fecha_registro;
			}
			public function getFechaRegistro()
			{
				return $this->fecha_registro;
			}

			private $folio;
			public function setFolio($folio)
			{
				$folio = HS::clean_input($folio);

				$this->folio = $folio > 0 ? $folio : 1;
			}
			public function getFolio()
			{
				return $this->folio;
			}

			private $descripcion;
			public function setDescripcion($descripcion)
			{
				$descripcion = HS::clean_input($descripcion);

				$this->descripcion = $descripcion;
			}
			public function getDescripcion()
			{
				return $this->descripcion;
			}

	}