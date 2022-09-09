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
	 * List/Get projects available, apply sorting and limit accordingly and conditions if any
	 * @param int $projectId
	 * @param int $getEntries
	 * @param int $getPage
	 * @param string $getSort
	 *
	 * @return mixed
	 **/
	public function getProjects($projectId = null, $getEntries = 0, $getPage = 0, $getSort = 'project_name ASC')
	{
		$builder = $this->db->table('v1_project');
		$builder->orderBy($getSort);
		if (!empty($projectId)) {
			$builder->where('project_id', $projectId);
			return $builder->get()->getRow();
		} else {
			return $builder->get($getEntries ?: null, $getPage ?: 0)->getResult();
		}
	}

	/**
	 * Add/Edit a project record
	 * @param array $formPost
	 *
	 * @return bool
	 **/
	public function addEditListing($formPost)
	{
		// Globals
		$builderListing = $this->db->table('t_project');
		$builderProjectAmenity = $this->db->table('t_project__project_amenity');

		// Start transactions
		$this->db->transStart();

		// Build array of values
		$valuesListing = [
			'project_code' => $this->listingCode(),
			'project_name' => trim(strip_tags($formPost['project_name'])),
			'project_title' => trim(strip_tags($formPost['project_title'])),
			'project_offer' => trim(strip_tags($formPost['project_offer'])),
			'project_location' => trim(strip_tags($formPost['project_location'])),
			'project_description' => trim($formPost['project_description']),
			'project_lot_min_sq' => trim($formPost['project_lot_min_sq']),
			'project_lot_max_sq' => trim($formPost['project_lot_max_sq']),
			'project_lot_min_price_sq' => trim($formPost['project_lot_min_price_sq']),
			'project_lot_max_price_sq' => trim($formPost['project_lot_max_price_sq']),
			'project_financing_month' => trim($formPost['project_financing_month']),
			'municipality_id' => $formPost['municipality_id'],
			'city_id' => $formPost['city_id'],
			'currency_id' => (!empty($formPost['project_lot_min_price_sq']) or !empty($formPost['project_lot_max_price_sq'])) ? $formPost['currency_id'] : null
		];

		// Clean null values from previous array
		$valuesListing = array_filter($valuesListing, fn ($value) => !is_null($value) && $value !== '');

		// Insert/Update record accordingly
		if (!empty($formPost['project_id'])) {
			$builderListing->where('project_id', $formPost['project_id']);
			$builderListing->update($valuesListing);
			$projectId = $formPost['project_id'];
		} else {
			$builderListing->insert($valuesListing);
			$projectId = $this->db->insertID();
		}

		// Link corresponding amenities with current project
		$builderProjectAmenity->delete(['project_id' => $projectId]);
		foreach ($formPost['project_amenity_id'] as $projectAmenityId) {
			$valuesProjectAmenity = [
				'project_id' => $projectId,
				'project_amenity_id' => $projectAmenityId
			];
			$builderProjectAmenity->insert($valuesProjectAmenity);
		}

		// End transactions
		$this->db->transComplete();

		return $this->db->transStatus();
	}

	/**
	 * Get project amenities available
	 * @param int $projectId
	 *
	 * @return mixed
	 **/
	public function getProjectAmenities($projectId)
	{
		$builder = $this->db->table('v1_project_amenity');
		$builder->where('project_id', $projectId);

		return $builder->get()->getResult();
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

	/**
	 * Generate and validate random code generated
	 *
	 * @return string
	 **/
	protected function listingCode()
	{
		// Globals
		$projectCode = random_string('nozero');
		$builder = $this->db->table('t_project');
		$builder->where('project_code', $projectCode);

		while ($builder->countAllResults() > 0) {
			$this->listingCode();
		}

		return $projectCode;
	}
}
