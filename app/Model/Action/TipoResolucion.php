<?php namespace App\Model\Action;

	use App\Model\Clase\TipoResolucion as CTipoResolucion;
	use App\Core\ModeloBase;

	class TipoResolucion extends ModeloBase
	{

		public function __construct()
		{
			$table = "tipo_resolucion";
			parent::__construct($table);
		}

		public function save(CTipoResolucion $resolucion)
		{
			$save = $this->runSql(
				"INSERT INTO tipo_resolucion (
					descripcion
				) VALUES (
					'". $resolucion->getDescripcion() . "'
				)"
			);

			return $save;
		}

		public function update(CTipoResolucion $resolucion)
		{
			$update = $this->runSql(
				"UPDATE tipo_resolucion SET
				descripcion = '". $resolucion->getDescripcion() . "' 
				WHERE id_tipo_resolucion = '". $resolucion->getIdTipoResolucion() . "'"
			);

			return $update;
		}

		public function delete(CTipoResolucion $resolucion)
		{
			$delete = $this->deleteBy("id_tipo_resolucion", $resolucion->getIdTipoResolucion());

			return $delete;
		}
	}