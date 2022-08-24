<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use App\Models\ProjectsModel;

class Projects extends BaseController
{
	protected $validation;
	protected $settings;
	protected $projects;

	public function __construct()
	{
		$this->settings = new SettingsModel();
		$this->projects = new ProjectsModel();
		$this->validation = \Config\Services::validation();
	}
	
	public function index($projectName)
	{
		// Set data index
		$dataIndex = [
			'sectionContact' => view('templates/contact'),
			'sectionReviews' => view('templates/reviews')
		];

		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('projects/' . $projectName, $dataIndex),
			'js' => load_js(['js/app-properties'])
		];

		// Output the view
		echo view('templates/public', $data);
	}

	public function listing()
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('projects/listing/index')
		];

		// Output the view
		echo view('templates/private', $data);
	}

	public function amenities()
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('projects/amenities/index')
		];

		// Output the view
		echo view('templates/private', $data);
	}

	public function load_form_add_edit_amenity($projectAmenityId = null)
	{
		// Check for an AJAX request
		if ($this->request->isAJAX()) {
			// Globals
			$amenity = !empty($projectAmenityId) ? $this->projects->getAmenities($projectAmenityId) : null;

			// Set data form Add/Edit
			$dataView = [
				'amenity' => $amenity,
				'getLanguages' => $this->settings->getLanguages()
			];

			echo view('projects/amenities/form_add_edit', $dataView);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}
}
