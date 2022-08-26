<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertiesModel extends Model
{
	protected $request;

	public function __construct()
	{
		$this->request = \Config\Services::request();
		$this->db = \Config\Database::connect();
	}

	/**
	 * List/Get characteristics available, apply sorting
	 * @param int $propertyCharacteristicId
	 * @param string $getSort
	 *
	 * @return object
	 **/
	public function getCharacteristics($propertyCharacteristicId = null, $getSort = 'property_characteristic_id ASC')
	{
		$builder = $this->db->table('t_property_characteristic');
		$builder->orderBy($getSort);
		if (!empty($propertyCharacteristicId)) {
			$builder->where('property_characteristic_id', $propertyCharacteristicId);
			return $builder->get()->getRow();
		} else {
			return $builder->get()->getResult();
		}
	}

	/**
	 * Add/Edit a characteristic record
	 * @param array $formPost
	 *
	 * @return bool
	 **/
	public function addEditCharacteristic($formPost)
	{
		// Globals
		$builder = $this->db->table('t_property_characteristic');

		// Build array of values
		$valuesCharacteristic = [
			'property_characteristic_name_EN' => trim(strip_tags($formPost['property_characteristic_name_EN'])),
			'property_characteristic_name_ES' => trim(strip_tags($formPost['property_characteristic_name_ES']))
		];

		// Insert/Update record accordingly
		if (!empty($formPost['property_characteristic_id'])) {
			$builder->where('property_characteristic_id', $formPost['property_characteristic_id']);
			return $builder->update($valuesCharacteristic);
		} else {
			return $builder->insert($valuesCharacteristic);
		}
	}
}
