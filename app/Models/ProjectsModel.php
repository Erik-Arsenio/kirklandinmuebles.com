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
}
