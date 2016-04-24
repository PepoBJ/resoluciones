<?php namespace App\Model\Action;

	use App\Model\Clase\Resolucion as CResolucion;
	use App\Core\ModeloBase;

	class Resolucion extends ModeloBase
	{

		public function __construct()
		{
			$table = "resolucion";
			parent::__construct($table);
		}

		public function save(CResolucion $resolucion)
		{
			$save = $this->runSql(
				"INSERT INTO resolucion (
					tipo_resolucion,
					area,
					nro_resolucion,
					nro_registro,
					fecha_registro,
					folio,
					descripcion
				) VALUES (
					'" . $resolucion->getTipoResolucion() . "',
					'" . $resolucion->getArea() . "',
					'" . $resolucion->getNroResolucion() . "',
					'" . $resolucion->getNroRegistro() . "',
					'" . $resolucion->getFechaRegistro() . "',
					'" . $resolucion->getFolio() . "',
					'" . $resolucion->getDescripcion() . "'
				)"
			);

			return $save;
		}

		public function update(CResolucion $resolucion)
		{
			$update = $this->runSql(
				"UPDATE resolucion SET 
				tipo_resolucion = '" . $resolucion->getTipoResolucion() . "',
				area = '" . $resolucion->getArea() . "',
				nro_resolucion = '" . $resolucion->getNroResolucion() . "',
				nro_registro = '" . $resolucion->getNroRegistro() . "',
				fecha_registro = '" . $resolucion->getFechaRegistro() . "',
				folio = '" . $resolucion->getFolio() . "',
				descripcion = '" . $resolucion->getDescripcion() . "' 
				WHERE id_resolucion = '" . $resolucion->getIdResolucion() . "'"
			);

			return $update;
		}

		public function delete(CResolucion $resolucion)
		{
			$delete = $this->deleteById($resolucion->getIdResolucion());

			return $delete;
		}

	}