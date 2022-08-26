<?php

namespace App\Controllers;

use App\Models\SettingsModel;

class Settings extends BaseController
{
	protected $validation;
	protected $settings;

	public function __construct()
	{
		$this->settings = new SettingsModel();
		$this->validation = \Config\Services::validation();
	}

	public function cities()
	{
		// Set data view
		$dataView = [
			'getCities' => $this->settings->getCities()
		];

		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('settings/cities/index', $dataView)
		];

		// Output the view
		echo view('templates/private', $data);
	}

	public function load_form_add_edit_city($cityId = null)
	{
		// Check for an AJAX request
		if ($this->request->isAJAX()) {
			// Globals
			$city = !empty($cityId) ? $this->settings->getCities($cityId) : null;

			// Set data form Add/Edit
			$dataView = [
				'city' => $city,
				'getStates' => $this->settings->getStates()
			];

			echo view('settings/cities/form_add_edit', $dataView);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function add_edit_city()
	{
		// Globals
		$formPost = $this->request->getPost();

		// Post request submitted
		if (!empty($formPost)) {
			$this->validation->reset();

			// Set validation rules
			$validationRules = $this->validate([
				'state_id' => [
					'label' => lang('Globals.state'),
					'rules' => 'required|is_natural_no_zero'
				],
				'city_name' => [
					'label' => lang('Globals.name'),
					'rules' => 'required'
				]
			]);

			if ($validationRules) {
				$response = $this->settings->addEditCity($formPost);

				if ($response) {
					session()->setFlashdata('msgConfirm', lang('Globals.confirm_1'));
				} else {
					session()->setFlashdata('msgError', lang('Globals.error_3'));
				}

				echo 0;
			} else {
				// Validation failes, reload the form
				$this->load_form_add_edit_city($formPost['city_id']);
			}
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function municipalities()
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('settings/municipalities/index')
		];

		// Output the view
		echo view('templates/private', $data);
	}
}
