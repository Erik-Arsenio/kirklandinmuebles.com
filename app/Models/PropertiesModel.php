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
	 * List/Get projects available, apply sorting and limit accordingly and conditions if any
	 * @param int $propertyId
	 * @param int $getEntries
	 * @param int $getPage
	 * @param string $getSort
	 *
	 * @return mixed
	 **/
	public function getProperties($propertyId = null, $getEntries = 0, $getPage = 0, $getSort = 'property_name ASC')
	{
		$builder = $this->db->table('v1_property');
		$builder->orderBy($getSort);
		if (!empty($propertyId)) {
			$builder->where('property_id', $propertyId);
			return $builder->get()->getRow();
		} else {
			return $builder->get($getEntries ?: null, $getPage ?: 0)->getResult();
		}
	}

	/**
	 * Get property characteristics available
	 * @param int $propertyId
	 *
	 * @return mixed
	 **/
	public function getPropertyCharacteristics($propertyId)
	{
		$builder = $this->db->table('t_property__characteristic');
		$builder->where('property_id', $propertyId);

		return $builder->get()->getResult();
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

	/**
	 * List/Get types available, apply sorting
	 * @param int $propertyTypeId
	 * @param string $getSort
	 *
	 * @return object
	 **/
	public function getTypes($propertyTypeId = null, $getSort = 'property_type_id ASC')
	{
		$builder = $this->db->table('t_property_type');
		$builder->orderBy($getSort);
		if (!empty($propertyTypeId)) {
			$builder->where('property_type_id', $propertyTypeId);
			return $builder->get()->getRow();
		} else {
			return $builder->get()->getResult();
		}
	}

	/**
	 * List/Get categories available, apply sorting
	 * @param int $propertyCategoryId
	 * @param string $getSort
	 *
	 * @return object
	 **/
	public function getCategories($propertyCategoryId = null, $getSort = 'property_category_id ASC')
	{
		$builder = $this->db->table('t_property_category');
		$builder->orderBy($getSort);
		if (!empty($propertyCategoryId)) {
			$builder->where('property_category_id', $propertyCategoryId);
			return $builder->get()->getRow();
		} else {
			return $builder->get()->getResult();
		}
	}

	/**
	 * List/Get stages available, apply sorting
	 * @param int $propertyStageId
	 * @param string $getSort
	 *
	 * @return object
	 **/
	public function getStages($propertyStageId = null, $getSort = 'property_stage_id ASC')
	{
		$builder = $this->db->table('t_property_stage');
		$builder->orderBy($getSort);
		if (!empty($propertyStageId)) {
			$builder->where('property_stage_id', $propertyStageId);
			return $builder->get()->getRow();
		} else {
			return $builder->get()->getResult();
		}
	}
}
