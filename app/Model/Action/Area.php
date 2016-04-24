<?php namespace App\Model\Action;

	use App\Model\Clase\Area as CArea;
	use App\Core\ModeloBase;

	class Area extends ModeloBase
	{

		public function __construct()
		{
			$table = "area";
			parent::__construct($table);
		}

		public function save(CArea $area)
		{
			$save = $this->runSql(
				"INSERT INTO area (
					nombre
				) VALUES (
					'" . $area->getNombre() . "'
				)"
			);

			return $save;
		}

		public function update(CArea $area)
		{
			$update = $this->runSql(
				"UPDATE area SET 
				nombre = '" . $area->getNombre() . "' 
				WHERE id_area = " . $area->getIdArea()
			);
		}

		public function delete(CArea $area)
		{
			$delete = $this->deleteById($area->getIdArea());

			return $delete;
		}

	}