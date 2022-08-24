<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectsModel extends Model
{
	protected $request;

	public function __construct()
	{
		$this->request = \Config\Services::request();
		$this->db = \Config\Database::connect();
	}

	/**
	 * List/Get amenities available, apply sorting
	 * @param int $projectAmenityId
	 * @param string $getSort
	 *
	 * @return object
	 **/
	public function getAmenities($projectAmenityId = null, $getSort = 'project_amenity_id ASC')
	{
		$builder = $this->db->table('t_project_amenity');
		$builder->orderBy($getSort);
		if (!empty($projectAmenityId)) {
			$builder->where('project_amenity_id', $projectAmenityId);
			return $builder->get()->getRow();
		} else {
			return $builder->get()->getResult();
		}
	}

	/**
	 * Add/Edit an amenity record
	 * @param array $formPost
	 *
	 * @return bool
	 **/
	public function addEditAmenity($formPost)
	{
		// Globals
		$builder = $this->db->table('t_project_amenity');

		// Build array of values
		$valuesAmenity = [
			'project_amenity_name_EN' => trim(strip_tags($formPost['project_amenity_name_EN'])),
			'project_amenity_name_ES' => trim(strip_tags($formPost['project_amenity_name_ES']))
		];

		// Insert/Update record accordingly
		if (!empty($formPost['project_amenity_id'])) {
			$builder->where('project_amenity_id', $formPost['project_amenity_id']);
			return $builder->update($valuesAmenity);
		} else {
			return $builder->insert($valuesAmenity);
		}
	}
}
