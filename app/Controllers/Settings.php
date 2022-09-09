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
		// Set data view
		$dataView = [
			'getMunicipalities' => $this->settings->getMunicipalities()
		];

		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('settings/municipalities/index', $dataView)
		];

		// Output the view
		echo view('templates/private', $data);
	}

	public function load_form_add_edit_municipality($municipalityId = null)
	{
		// Check for an AJAX request
		if ($this->request->isAJAX()) {
			// Globals
			$municipality = !empty($municipalityId) ? $this->settings->getMunicipalities($municipalityId) : null;

			// Set data form Add/Edit
			$dataView = [
				'municipality' => $municipality,
				'getCities' => $this->settings->getCities()
			];

			echo view('settings/municipalities/form_add_edit', $dataView);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function add_edit_municipality()
	{
		// Globals
		$formPost = $this->request->getPost();

		// Post request submitted
		if (!empty($formPost)) {
			$this->validation->reset();

			// Set validation rules
			$validationRules = $this->validate([
				'city_id' => [
					'label' => lang('Globals.city'),
					'rules' => 'required|is_natural_no_zero'
				],
				'municipality_name' => [
					'label' => lang('Globals.name'),
					'rules' => 'required'
				]
			]);

			if ($validationRules) {
				$response = $this->settings->addEditMunicipality($formPost);

				if ($response) {
					session()->setFlashdata('msgConfirm', lang('Globals.confirm_1'));
				} else {
					session()->setFlashdata('msgError', lang('Globals.error_3'));
				}

				echo 0;
			} else {
				// Validation failes, reload the form
				$this->load_form_add_edit_municipality($formPost['municipality_id']);
			}
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function dropdown_cities($stateId)
	{
		// Check for an AJAX request
		if ($this->request->isAJAX() && !empty($stateId)) {
			// Set data view
			$dataView = [
				'getCities' => $this->settings->getCities(null, $stateId)
			];

			echo view('settings/dropdown_cities', $dataView);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function dropdown_municipalities($citiId)
	{
		// Check for an AJAX request
		if ($this->request->isAJAX() && !empty($citiId)) {
			// Set data view
			$dataView = [
				'getMunicipalities' => $this->settings->getMunicipalities(null, $citiId)
			];

			echo view('settings/dropdown_municipalities', $dataView);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}
}
