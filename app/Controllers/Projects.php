<?php

namespace App\Controllers;

class Projects extends BaseController
{
	public function index($projectName)
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('projects/' . $projectName),
			'js' => load_js(['js/app-' . $projectName])
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
			$amenity = !empty($projectAmenityId) ? $this->cars->getBrands($projectAmenityId) : null;

			// Set data form Add/Edit
			$dataView = [
				'amenity' => $projectAmenityId
			];

			echo view('cars/brands/form_add_edit', $dataView);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}
}
