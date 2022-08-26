<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use App\Models\PropertiesModel;

class Properties extends BaseController
{
	protected $validation;
	protected $settings;
	protected $properties;

	public function __construct()
	{
		$this->settings = new SettingsModel();
		$this->properties = new PropertiesModel();
		$this->validation = \Config\Services::validation();
	}

	public function listing()
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('properties/listing/index')
		];

		// Output the view
		echo view('templates/private', $data);
	}

	public function characteristics()
	{
		// Set data view
		$dataView = [
			'getCharacteristics' => $this->properties->getCharacteristics()
		];

		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('properties/characteristics/index', $dataView)
		];

		// Output the view
		echo view('templates/private', $data);
	}

	public function load_form_add_edit_characteristic($propertyCharacteristicId = null)
	{
		// Check for an AJAX request
		if ($this->request->isAJAX()) {
			// Globals
			$characteristic = !empty($propertyCharacteristicId) ? $this->properties->getCharacteristics($propertyCharacteristicId) : null;

			// Set data form Add/Edit
			$dataView = [
				'characteristic' => $characteristic,
				'getLanguages' => $this->settings->getLanguages()
			];

			echo view('properties/characteristics/form_add_edit', $dataView);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function add_edit_characteristic()
	{
		// Globals
		$formPost = $this->request->getPost();
		$getLanguages = $this->settings->getLanguages();

		// Post request submitted
		if (!empty($formPost)) {
			$this->validation->reset();

			// Set validation rules
			foreach ($getLanguages as $language) {
				$validationRules["property_characteristic_name_{$language->language_abr}"] = [
					'label' => lang('Globals.name') . ' (' . $language->language_name . ')',
					'rules' => 'required'
				];
			}

			if ($this->validate($validationRules)) {
				$response = $this->properties->addEditCharacteristic($formPost);

				if ($response) {
					session()->setFlashdata('msgConfirm', lang('Globals.confirm_1'));
				} else {
					session()->setFlashdata('msgError', lang('Globals.error_3'));
				}

				echo 0;
			} else {
				// Validation failes, reload the form
				$this->load_form_add_edit_characteristic($formPost['property_characteristic_id']);
			}
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}
}
