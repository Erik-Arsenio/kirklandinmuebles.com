<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use App\Models\PropertiesModel;

class Properties extends BaseController
{
	protected $settings;
	protected $properties;
	protected $validation;
	protected $pager;

	public function __construct()
	{
		$this->settings = new SettingsModel();
		$this->properties = new PropertiesModel();
		$this->validation = \Config\Services::validation();
		$this->pager = \Config\Services::pager();
	}

	public function listing()
	{
		// Globals
		$getEntries = intval($this->request->getGet('et')) ?: $this->pager->getPerPage();
		$getPage = intval($this->request->getGet('page')) ?: 1;
		$getSort = is_null($this->request->getGet('sr')) ? 'property_name ASC' : str_replace('+', ' ', $this->request->getGet('sr'));

		if (is_int($getEntries) && is_int($getPage)) {
			// Get total of items returned by the query (filters applied)
			$listProperties = $this->properties->getProperties(null, 0, 0, $getSort);
			$totalRows = count($listProperties);

			// Set data index
			$dataView = [
				'footer' => view_cell('\App\Libraries\Cell::footer', ['get_page' => $getPage, 'get_entries' => $getEntries, 'total_rows' => $totalRows]),
				'getSort' => $getSort,
				'getProperties' => array_slice($listProperties, ($getPage - 1) * $getEntries, $getEntries)
			];

			// Set data template
			$data = [
				'title' => lang('Globals.properties_list'),
				'content' => view('properties/listing/index', $dataView)
			];

			// Output the view
			return view('templates/private', $data);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function load_form_add_edit_listing($propertyId = null, $formPost = null)
	{
		// Check for an AJAX request
		if ($this->request->isAJAX()) {
			// Globals
			$property = !empty($propertyId) ? $this->properties->getProperties($propertyId) : null;
			$propertyCharacteristicNameField = "property_characteristic_name_" . strtoupper(service('request')->getLocale());
			$listPropertyCharacteristics = [];

			// Get some values when editing
			if (!empty($property)) {
				$listPropertyCharacteristics = array_column($this->properties->getPropertyCharacteristics($propertyId), 'property_characteristic_id');
			}

			// Set data form Add/Edit
			$dataView = [
				'project' => $property,
				'formPost' => $formPost,
				'listPropertyCharacteristics' => $listPropertyCharacteristics,
				'getStates' => $this->settings->getStates(),
				'getCities' => !empty($property) ? $this->settings->getCities(null, $property->state_id) : null,
				'getMunicipalities' => !empty($property) ? $this->settings->getMunicipalities(null, $property->city_id) : null,
				'getCurrencies' => $this->settings->getCurrencies(),
				'getCharacteristics' => $this->properties->getCharacteristics(null, "{$propertyCharacteristicNameField} ASC"),
				'propertyCharacteristicNameField' => $propertyCharacteristicNameField
			];

			echo view('properties/listing/form_add_edit', $dataView);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
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
