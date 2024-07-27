<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use App\Models\PropertiesModel;
use App\Models\ProjectsModel;

class Home extends BaseController
{
	protected $settings;
	protected $properties;
	protected $projects;
	protected $validation;
	protected $pager;

	public function __construct()
	{
		$this->settings = new SettingsModel();
		$this->properties = new PropertiesModel();
		$this->projects = new ProjectsModel();
		$this->validation = \Config\Services::validation();
		$this->pager = \Config\Services::pager();
		$this->properties_list = remote_json_file('properties_list');
		$this->locations_list = remote_json_file('locations');
	}
	// public string $defaultLocale = 'en';
	public function index()
	{

		
		if ($this->request->getVar('lang')) {
			$lang = $this->request->getVar('lang');
			$this->request->setLocale($lang);
		} else {
			$lang = $this->request->getLocale();
		}

		$uriLocation = " ";

		$promo_offer = true;
		$propertiesList = !empty($uriLocation) ? json_search($promo_offer, 'promo_offer', $this->properties_list) : null;
		// dd($lang, $uriLocation, $propertiesList);

		// echo "Leguaje del select- " . $lang;
		$pageTitle =[
			"es"=>"Terrenos en venta en Yucatán, México.",
			"en"=>"Sale of residential land and residential lots in Yucatan, Mexico.",
		];

		$datalang = [
			'lang' => $lang,
		];
		// Set data index
		$dataIndex = [
			'propertiesList' =>  $propertiesList,
			'textField' => "text_" . strtoupper(service('request')->getLocale()),
			'lang' => $lang,
			'sectionAttractions' => view('templates/attractions'),
			'sectionContact' => view('templates/contact', $datalang),
			'sectionReviews' => view('templates/reviews')
		];

		$url_content = 'properties/index';
		$js = ['js/property', 'js/swiper-bundle.min'];
		// dd($lang, $propertieName,$dataIndex, $url_content);


		// Set data template
		$data = [
			// 'languaje' => $languaje,
			'title' => $pageTitle[$lang],
			'content' => view('home/index', $dataIndex),
			'js' => load_js([])
		];
		// Output the view
		echo view('templates/public', $data);
	}
}
