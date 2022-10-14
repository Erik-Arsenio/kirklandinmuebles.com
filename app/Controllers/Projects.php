<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use App\Models\ProjectsModel;

class Projects extends BaseController
{
	protected $settings;
	protected $projects;
	protected $validation;
	protected $pager;

	public function __construct()
	{
		$this->settings = new SettingsModel();
		$this->projects = new ProjectsModel();
		$this->validation = \Config\Services::validation();
		$this->pager = \Config\Services::pager();
	}

	public function index($projectName, $projectStage = null)
	{
		// Set data index
		$dataIndex = [
			'sectionContact' => view('templates/contact'),
			'sectionReviews' => view('templates/reviews'),
			'projectStage' => $projectStage
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
		// Globals
		$getEntries = intval($this->request->getGet('et')) ?: $this->pager->getPerPage();
		$getPage = intval($this->request->getGet('page')) ?: 1;
		$getSort = is_null($this->request->getGet('sr')) ? 'project_name ASC' : str_replace('+', ' ', $this->request->getGet('sr'));

		if (is_int($getEntries) && is_int($getPage)) {
			// Get total of items returned by the query (filters applied)
			$listProjects = $this->projects->getProjects(null, 0, 0, $getSort);
			$totalRows = count($listProjects);

			// Set data index
			$dataView = [
				'footer' => view_cell('\App\Libraries\Cell::footer', ['get_page' => $getPage, 'get_entries' => $getEntries, 'total_rows' => $totalRows]),
				'getSort' => $getSort,
				'getProjects' => array_slice($listProjects, ($getPage - 1) * $getEntries, $getEntries)
			];

			// Set data template
			$data = [
				'title' => lang('Globals.projects_list'),
				'content' => view('projects/listing/index', $dataView)
			];

			// Output the view
			return view('templates/private', $data);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function load_form_add_edit_listing($projectId = null, $formPost = null)
	{
		// Check for an AJAX request
		if ($this->request->isAJAX()) {
			// Globals
			$project = !empty($projectId) ? $this->projects->getProjects($projectId) : null;
			$listProjectAmenities = [];

			// Get some values when editing
			if (!empty($project)) {
				$listProjectAmenities = array_column($this->projects->getProjectAmenities($projectId), 'project_amenity_id');
			}

			// Set data form Add/Edit
			$dataView = [
				'project' => $project,
				'formPost' => $formPost,
				'listProjectAmenities' => $listProjectAmenities,
				'getStates' => $this->settings->getStates(),
				'getCities' => !empty($project) ? $this->settings->getCities(null, $project->state_id) : null,
				'getMunicipalities' => !empty($project) ? $this->settings->getMunicipalities(null, $project->city_id) : null,
				'getCurrencies' => $this->settings->getCurrencies(),
				'getAmenities' => $this->projects->getAmenities(),
				'projectAmenityNameField' => "project_amenity_name_" . strtoupper(service('request')->getLocale())
			];

			echo view('projects/listing/form_add_edit', $dataView);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function add_edit_listing()
	{
		// Globals
		$formPost = $this->request->getPost();

		// Post request submitted
		if (!empty($formPost)) {
			$this->validation->reset();

			// Set validation rules
			$validationRules = $this->validate([
				'project_name' => [
					'label' => lang('Globals.name'),
					'rules' => 'required|alpha_numeric_space'
				],
				'project_amenity_id.*' => [
					'label' => lang('Globals.amenities'),
					'rules' => 'required'
				],
				'state_id' => [
					'label' => lang('Globals.state'),
					'rules' => 'required|is_natural_no_zero'
				],
				'city_id' => [
					'label' => lang('Globals.city'),
					'rules' => 'required|is_natural_no_zero'
				],
				'municipality_id' => [
					'label' => lang('Globals.municipality'),
					'rules' => 'permit_empty|is_natural_no_zero'
				],
				'project_financing_month' => [
					'label' => lang('Globals.financing'),
					'rules' => 'permit_empty|is_natural_no_zero'
				],
				'project_lot_min_sq' => [
					'label' => lang('Globals.lot') . " " . lang('Globals.area') . " Min",
					'rules' => 'permit_empty|greater_than[0]'
				],
				'project_lot_max_sq' => [
					'label' => lang('Globals.lot') . " " . lang('Globals.area') . " Max",
					'rules' => 'permit_empty|greater_than[0]'
				],
				'project_lot_min_price_sq' => [
					'label' => lang('Globals.lot') . " " . lang('Globals.price') . " Min",
					'rules' => 'permit_empty|greater_than[0]'
				],
				'project_lot_max_price_sq' => [
					'label' => lang('Globals.lot') . " " . lang('Globals.price') . " Max",
					'rules' => 'permit_empty|greater_than[0]'
				],
			]);

			if ($validationRules) {
				$response = $this->projects->addEditListing($formPost);

				if ($response) {
					session()->setFlashdata('msgConfirm', lang('Globals.confirm_1'));
				} else {
					session()->setFlashdata('msgError', lang('Globals.error_3'));
				}

				echo 0;
			} else {
				// Validation failes, reload the form
				$this->load_form_add_edit_listing($formPost['project_id'], $formPost);
			}
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function amenities()
	{
		// Set data view
		$dataView = [
			'getAmenities' => $this->projects->getAmenities()
		];

		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('projects/amenities/index', $dataView)
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

	public function add_edit_amenity()
	{
		// Globals
		$formPost = $this->request->getPost();
		$getLanguages = $this->settings->getLanguages();

		// Post request submitted
		if (!empty($formPost)) {
			$this->validation->reset();

			// Set validation rules
			foreach ($getLanguages as $language) {
				$validationRules["project_amenity_name_{$language->language_abr}"] = [
					'label' => lang('Globals.name') . ' (' . $language->language_name . ')',
					'rules' => 'required'
				];
			}

			if ($this->validate($validationRules)) {
				$response = $this->projects->addEditAmenity($formPost);

				if ($response) {
					session()->setFlashdata('msgConfirm', lang('Globals.confirm_1'));
				} else {
					session()->setFlashdata('msgError', lang('Globals.error_3'));
				}

				echo 0;
			} else {
				// Validation failes, reload the form
				$this->load_form_add_edit_amenity($formPost['project_amenity_id']);
			}
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}
}
