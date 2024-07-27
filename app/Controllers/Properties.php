<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use App\Models\PropertiesModel;
use App\Models\ProjectsModel;

class Properties extends BaseController
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

	public function index($uriLocation, $propertieStage = null )
	{
		// dd($uriLocation);
		if ($this->request->getVar('lang')) {
			$lang = $this->request->getVar('lang');
			$this->request->setLocale($lang);
		} else {
			$lang = $this->request->getLocale();
		}

		// Lista de Locaciones en Yucatan
		$dataLocations = get_json_file ('locations');
		$dataLocations = json_decode(json_encode($dataLocations), true);
	
		$state = "Yucatan"; // La ciudad que deseas buscar
		if (isset($dataLocations["Mexico"][$state])) {
			$locationList = $dataLocations["Mexico"][$state];
	
		} else {
			echo "La ciudad $state no se encontró en el JSON.\n";
		}

		// Array de los Municipios
		$municipios_list = $locationList["Municipios"];
		// Array de todos los pueblos
		$pueblos_list = $dataLocations["Mexico"]["Pueblos"];

		$claves_municipios = array_keys($locationList["Municipios"]);
		$claves_pueblos = array_keys($dataLocations["Mexico"]["Pueblos"]);

		// Busca la key del municipio 
		$valorBuscado = "Progreso";
		$claveEncontrada = array_search($valorBuscado, $municipios_list);

		// Array de los pueblos selccionados
		$pueblos_selected =  $pueblos_list[$claveEncontrada];
		// dd($dataLocations, $municipios_list, $valorBuscado,  $claveEncontrada,  $pueblos_selected);

		if (!empty($uriLocation and $uriLocation == "$1")) {
			// $dataProject = get_json_file ('properties_list');
			// $dataProject = json_encode($dataProject);
			// $dataProject = json_decode(json_encode($dataProject), true);
			// dd($lang, $uriLocation, $dataProject);
			$formPost = $this->request->getPost();

			$sortOrder = "SORT_ASC";
			// A form post has been submitted
			if (!empty($formPost)) {
				
					// Ordenar por
					// $sortOrder = $formPost["order_selected"];
					
					
					// dd($formPost, $formPost["zone_municipality"], $formPost["state_selected"], $sortOrder);
					
					// $municipality_selected = $formPost["municipality_selected"];
					$state_selected = $formPost["state_selected"];
					
					$valorBuscado = $formPost["municipality_selected"];
					$claveEncontrada = array_search($valorBuscado, $municipios_list);
					// Array de los pueblos selccionados
					$pueblos_selected =  $pueblos_list[$claveEncontrada];
					if (!empty($pueblos_selected)) {
						$municipality_selected = $formPost["municipality_selected"];
					} else {
						$municipality_selected = " " ; $formPost["city"] != ' ' ;
					}
					
					// if ($formPost["zone_municipality"] == "" and $formPost["municipality_selected"] == "all") {
					// 	$state_selected = "Yucatan";
					// 	$municipality_selected = "all";
					// 	$pueblos_selected = $municipios_list;
					// 	$propertiesList = !empty($uriLocation) ? json_search("Yucatan", 'state', $this->properties_list) : null;
					// } else {
					// 	// Busca la key del municipio 
					// }
					
					$propertiesList = !empty($formPost["municipality_selected"]) ? json_search($formPost["municipality_selected"], 'zone_municipality', $this->properties_list) : null;
				


					// dd($formPost, $propertiesList, $formPost["municipality_selected"], $municipality_selected, $state_selected, $pueblos_selected);
					if ($formPost["city"] != 'all') {
						// dd($formPost, $propertiesList, $formPost["zone_municipality"]);
						
						$jsonSearchField = "zone_city";
						$returnKeys = false;
						$jsonResults = [];
						foreach ($propertiesList as $key => $item) {
							# Define search element item according to type (Array or Object)
							// $searchItem = is_array($jsonArray) ? $item[$jsonSearchField] : $item->$jsonSearchField;
							$searchItem = is_array($propertiesList) ? $propertiesList[$key]->$jsonSearchField : $propertiesListy[$key]->$jsonSearchField;
		
							if ($searchItem == $formPost["city"]) {
								array_push($jsonResults, $returnKeys == true ? $key : $item);
							}
						}
						$propertiesList = $jsonResults;
						$city_selected = $formPost["city"];
						$property_type_selected = "all";
						// dd($formPost, $propertiesList, $city_selected, $property_type_selected);
					}
					if ($formPost["type_property"] != 'all') {
					// if (!empty($formPost["type_property"])) {
						# code...
						// dd($formPost, $propertiesList, $city_selected, $property_type_selected);
						// $propertiesList = !empty($formPost["type_property"]) ? json_search($formPost["type_property"], 'property_type', $this->properties_list) : null;
						$jsonSearchField = "property_type";
						$textField = "text_" . strtoupper(service('request')->getLocale());
						$returnKeys = false;
						$jsonResults = [];
						foreach ($propertiesList as $key => $item) {
							# Define search element item according to type (Array or Object)
							// $searchItem = is_array($jsonArray) ? $item[$jsonSearchField] : $item->$jsonSearchField;
							$searchItem = is_array($propertiesList) ? strtolower($propertiesList[$key]->$jsonSearchField->$textField) : strtolower($propertiesListy[$key]->$jsonSearchField->$textField);
							// print_r($searchItem);
							if ($searchItem == strtolower($formPost["type_property"])) {
								array_push($jsonResults, $returnKeys == true ? $key : $item);
							}
						}
						$propertiesList = $jsonResults;

						$property_type_selected = strtolower($formPost["type_property"]);
						if (!isset($city_selected)) {$city_selected = "all";} 
						// dd($formPost, $propertiesList, $formPost["type_property"],  $property_type_selected);
					}

					if ( intval($formPost["num_bedroom"]) > 1) {
						$jsonSearchField = "bedrooms";
						$returnKeys = false;
						$jsonResults = [];
						foreach ($propertiesList as $key => $item) {
							# Define search element item according to type (Array or Object)
							// $searchItem = is_array($jsonArray) ? $item[$jsonSearchField] : $item->$jsonSearchField;
							$searchItem = is_array($propertiesList) ? $propertiesList[$key]->property_data->$jsonSearchField : $propertiesListy[$key]->property_data->$jsonSearchField;
		
							if ($searchItem >= intval($formPost["num_bedroom"])) {
								array_push($jsonResults, $returnKeys == true ? $key : $item);
							}
						}
						$propertiesList = $jsonResults;
						$num_bedroom_selected = intval($formPost["num_bedroom"]);
						// dd($formPost, $propertiesList, $searchItem);
					}
					// if (!isset($municipality_selected)) {$municipality_selected = "all";
					if ($municipality_selected != '' and  $state_selected = "") {
						# code...
						$state_selected = "Yucatan";
					} else {
						$state_selected = "";
					}
					if (!isset($city_selected)) {$city_selected = "all";} 
					if (!isset($property_type_selected)) {$property_type_selected = "all";} 
					if (!isset($num_bedroom_selected)) {$num_bedroom_selected = 1;} 

					// dd($formPost, $propertiesList,  $sortOrder);
					//Ordenar un array multidimensional ASC o DESC
					// if ($sortOrder == "SORT_ASC") {
					// 	// dd($formPost, $propertiesList,  $sortOrder);
					// 	$columns = array_column( $propertiesList, 'property_price');
					// 	array_multisort($columns, SORT_ASC, $propertiesList);
					// } else {
					// 	// dd($propertiesList,  $sortOrder);
					// 	$columns = array_column( $propertiesList, 'property_price');
					// 	array_multisort($columns, SORT_DESC, $propertiesList);
					// }
					
					// dd($formPost, $propertiesList,$city_selected,$property_type_selected,$num_bedroom_selected,$state_selected,$municipality_selected);
					// dd($formPost, $propertiesList,$city_selected,$property_type_selected,$num_bedroom_selected,$state_selected,$municipality_selected);
					

			} else {
				// if (!isset($city_selected)) {$city_selected = "";} else {$city_selected = "all";}
				// if (!isset($property_type_selected)) {$property_type_selected = "";}
				$municipality_selected = "all"; 
				$state_selected = "Yucatan";
				$city_selected = "all";
				$property_type_selected = "all";
				$num_bedroom_selected = 1;
				$propertiesList = !empty($uriLocation) ? json_search($state_selected, 'state', $this->properties_list) : null;

				//Ordenar un array multidimensional ASC o DESC
				// if ($sortOrder == "SORT_ASC") {
				// 	// dd($formPost, $propertiesList,  $sortOrder);
				// 	$columns = array_column( $propertiesList, 'property_price');
				// 	array_multisort($columns, SORT_ASC, $propertiesList);
				// } else {
				// 	dd( $propertiesList,  $sortOrder);
				// 	$columns = array_column( $propertiesList, 'property_price');
				// 	array_multisort($columns, SORT_DESC, $propertiesList);
				// }

				// dd($lang, $uriLocation, $propertiesList, $city_selected, $property_type_selected, $municipality_selected,  $sortOrder);
				// dd($lang, $uriLocation, $propertiesList, $city_selected, $property_type_selected, $municipality_selected, $ascendente, $descendente);
			}
		} elseif (!empty($uriLocation)) {
			if ($uriLocation == "venta" or  $uriLocation == "renta" or $uriLocation == "sale" or  $uriLocation == "rent") {

				$investmentNameType = "investment_type_" . strtoupper(service('request')->getLocale());
				# code...
				$propertiesList = !empty($uriLocation) ? json_search($uriLocation, $investmentNameType, $this->properties_list) : null;
				$zoneNameField = "zone_name_" . strtoupper(service('request')->getLocale());
				$city_selected = "all";
				$property_type_selected = "all";
			} 
			// dd($lang, $uriLocation, count($propertiesList) ,$propertiesList, $investmentNameType);
		} else {

			# Globals
			$propertiesList = !empty($uriLocation) ? json_search($uriLocation, 'zone_city', $this->properties_list) : null;
			$zoneNameField = "zone_name_" . strtoupper(service('request')->getLocale());
			dd($lang, $uriLocation, $propertiesList);
		}
		// dd($propertiesList);
		$directoryImages = dirname(ROOTPATH, 1) . DIRECTORY_SEPARATOR . 'cdn.kirklandinmuebles.com' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'properties' . DIRECTORY_SEPARATOR ;

		$directoryPhotos = array_diff(scandir($directoryImages), array('.', '..'));
		$listPhotos =[];
		foreach ($directoryPhotos as $key => $photo) {
			# code...
			$directoryImages = dirname(ROOTPATH, 1) . DIRECTORY_SEPARATOR . 'cdn.kirklandinmuebles.com' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'properties' . DIRECTORY_SEPARATOR . $photo . DIRECTORY_SEPARATOR;
			$directoryPhotos = array_diff(scandir($directoryImages), array('.', '..'));
			array_push($listPhotos,$directoryPhotos[2]);
		}
		// dd($propertiesList, $directoryImages, $directoryPhotos, $listPhotos);
		# Define a random excursions to promote them on home page banner area
		// $promoProperties = array_keys($propertiesList);
		// $propertiesKeys = array_rand($promoProperties, 6);

		# Randomize excursions list for carousel area
		// $propertiesListCarousel = $promoProperties;
		// foreach ($propertiesListCarousel as $key => $value) {
		// 	if (in_array($key, $propertiesKeys)) {
		// 		unset($propertiesListCarousel[$key]);
		// 	}
		// }

		// dd($lang, $uriLocation, $dataProject, $propertiesList, $promoProperties, $propertiesKeys, $propertiesListCarousel);
		
		// dd($formPost, $propertiesList, $city_selected, $property_type_selected);

		$datalang = [
			'lang' => $lang,
		];

		$dataIndex = [
			// 'sectionAttractions' => view('templates/attractions'),
			'sectionContact' => view('templates/contact', $datalang),
			'sectionReviews' => view('templates/reviews'),
			'projectStage' => $propertieStage,
			'propertiesList' =>  $propertiesList,
			'directoryPhotos' => $directoryPhotos,
			'municipiosList' =>  $municipios_list,
			'pueblosSelected' =>  $pueblos_selected,
			'propertyNameField' => "property_name_" . strtoupper(service('request')->getLocale()),
			'propertyInvesmentType' => "investment_type_" . strtoupper(service('request')->getLocale()),
			'propertyZoneNameField' => "zone_name_" . strtoupper(service('request')->getLocale()),
			'municipality_selected' => $municipality_selected,
			'state_selected' => $state_selected,
			'city_selected' => $city_selected,
			'property_type_selected' => $property_type_selected,
			'num_bedroom_selected' => $num_bedroom_selected,
			'textField' => "text_" . strtoupper(service('request')->getLocale()),
			'sortOrder' => $sortOrder,
			'listPhotos' => $listPhotos,
			'lang' => $lang,
			// 'updateProject' => $updateProject
		];
		$url_content = 'properties/index';
		$js = ['js/property', 'js/swiper-bundle.min'];
		// dd($lang, $propertieName,$dataIndex, $url_content);
		
		$data = [
			'title' => 'Propiedades',
			'content' => view($url_content, $dataIndex),
			'js' => load_js(
				$js,
				)
		];

		// Output the view
		echo view('templates/public', $data);
	}


	public function property($uriLocation, $propertyName )
	{
		if ($this->request->getVar('lang')) {
			$lang = $this->request->getVar('lang');
			$this->request->setLocale($lang);
		} else {
			$lang = $this->request->getLocale();
		}

		$datalang = [
			'lang' => $lang,
		];

		$dataProject = get_json_file ('properties_list');
		// $dataProject = json_encode($dataProject);
		$dataProject = json_decode(json_encode($dataProject), true);
		
		# Globals
		$propertiesList = !empty($propertyName) ? json_search($propertyName, 'property_code', $this->properties_list) : null;
		$zoneNameField = "zone_name_" . strtoupper(service('request')->getLocale());
		$propertiesPromo = true;
		$propertiesPromoList = !empty($propertyName) ? json_search($propertiesPromo, 'promo_offer', $this->properties_list) : null;

		// dd($propertiesList, $propertyName, $propertiesPromoList);
		$directoryImages = dirname(ROOTPATH, 1) . DIRECTORY_SEPARATOR . 'cdn.kirklandinmuebles.com' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'properties' . DIRECTORY_SEPARATOR . $propertyName . DIRECTORY_SEPARATOR;
		// $directoryImages = STATIC_URL . 'img/properties/' . $propertiesList[0]->property_code . '/';
		// $directoryPhotos = directory_map($directoryImages);
		
		$ruta_carpeta = scandir($directoryImages);
		
		$directoryPhotos = array_diff(scandir($directoryImages), array('.', '..'));

		// dd($directoryImages, $ruta_carpeta,  $directoryPhotos, $directoryPhotos[2]);
		sort($directoryPhotos);
		// dd($directoryImages, $directoryPhotos);

		// dd($directoryImages);

		// dd($uriLocation, $propertyName, $dataProject, $propertiesList, $zoneNameField);
		$clave = array_search($propertiesList[0]->property_code, array_keys($dataProject));
		unset($propertiesPromoList[$clave]);
		# Define a random excursions to promote them on home page banner area
		$promoProperties = array_keys($propertiesPromoList);
		$propertiesKeys = array_rand($promoProperties, 5);

		# Randomize excursions list for carousel area
		$propertiesListPromo = $promoProperties;
		foreach ($propertiesListPromo as $key => $value) {

			if ($propertiesListPromo[$key] == $clave) {
			// if (in_array($key, $propertiesKeys)) {
				unset($propertiesListPromo[$key]);
			}
		}
		// $textField = "text_" . strtoupper(service('request')->getLocale());
		// dd($uriLocation, $dataProject, $propertiesPromoList, $propertiesList[0]->property_code, $promoProperties, $propertiesKeys, $propertiesListPromo, $clave, count($propertiesListPromo) , $propertiesList, $propertiesList[0]->zone_municipality_name->$textField);

		$dataIndex = [
			'sectionAttractions' => view('templates/attractions'),
			'sectionContact' => view('templates/contact', $datalang),
			'sectionReviews' => view('templates/reviews'),
			'directoryPhotos' => $directoryPhotos,
			'propertiesList' =>  $propertiesList,
			'propertiesPromoList' =>  $propertiesPromoList,
			'propertiesListPromo' =>  $propertiesListPromo,
			'propertyNameField' => "property_name_" . strtoupper(service('request')->getLocale()),
			'propertyInvesmentType' => "investment_type_" . strtoupper(service('request')->getLocale()),
			'propertyZoneNameField' => "zone_name_" . strtoupper(service('request')->getLocale()),
			// 'propertyDescriptionField' => "property_description_" . strtoupper(service('request')->getLocale()),
			// 'propertyCharacteristicsField' => "property_characteristics_" . strtoupper(service('request')->getLocale()),
			// 'dataProject' =>  $dataProject,
			'lang' => $lang,
			// 'updateProject' => $updateProject
			'textField' => "text_" . strtoupper(service('request')->getLocale())
		];
		if ($propertyName == 'AGVECA-4695') {
			$url_content = 'properties/property';
			# code...
		} else {
			$url_content = 'properties/property';
		}
		$js = ['js/property', 'js/swiper-bundle.min'];
		// $js = ['js/app-properties'];
		
		$data = [
			'title' => 'Propiedades',
			'content' => view('properties/property', $dataIndex),
			'js' => load_js($js,)
			];
			
		// dd($propertieName, $lang, $url_content, $data );
			
		// Output the view
		echo view('templates/public', $data);
	}
	// public function listing()
	// {
	// 	// Globals
	// 	$getEntries = intval($this->request->getGet('et')) ?: $this->pager->getPerPage();
	// 	$getPage = intval($this->request->getGet('page')) ?: 1;
	// 	$getSort = is_null($this->request->getGet('sr')) ? 'property_name ASC' : str_replace('+', ' ', $this->request->getGet('sr'));

	// 	if (is_int($getEntries) && is_int($getPage)) {
	// 		// Get total of items returned by the query (filters applied)
	// 		$listProperties = $this->properties->getProperties(null, 0, 0, $getSort);
	// 		$totalRows = count($listProperties);

	// 		// Set data index
	// 		$dataView = [
	// 			'footer' => view_cell('\App\Libraries\Cell::footer', ['get_page' => $getPage, 'get_entries' => $getEntries, 'total_rows' => $totalRows]),
	// 			'getSort' => $getSort,
	// 			'getProperties' => array_slice($listProperties, ($getPage - 1) * $getEntries, $getEntries)
	// 		];

	// 		// Set data template
	// 		$data = [
	// 			'title' => lang('Globals.properties_list'),
	// 			'content' => view('properties/listing/index', $dataView)
	// 		];

	// 		// Output the view
	// 		return view('templates/private', $data);
	// 	} else {
	// 		throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
	// 	}
	// }

	// public function load_form_add_edit_listing($propertyId = null, $formPost = null)
	// {
	// 	// Check for an AJAX request
	// 	if ($this->request->isAJAX()) {
	// 		// Globals
	// 		$property = !empty($propertyId) ? $this->properties->getProperties($propertyId) : null;
	// 		$propertyCharacteristicNameField = "property_characteristic_name_" . strtoupper(service('request')->getLocale());
	// 		$propertyTypeNameField = "property_type_name_" . strtoupper(service('request')->getLocale());
	// 		$propertyCategoryNameField = "property_category_name_" . strtoupper(service('request')->getLocale());
	// 		$propertyStageNameField = "property_stage_name_" . strtoupper(service('request')->getLocale());
	// 		$listPropertyCharacteristics = [];

	// 		// Get some values when editing
	// 		if (!empty($property)) {
	// 			$listPropertyCharacteristics = array_column($this->properties->getPropertyCharacteristics($propertyId), 'property_characteristic_id');
	// 		}

	// 		// Set data form Add/Edit
	// 		$dataView = [
	// 			'property' => $property,
	// 			'formPost' => $formPost,
	// 			'listPropertyCharacteristics' => $listPropertyCharacteristics,
	// 			'getProjects' => $this->projects->getProjects(),
	// 			'getStates' => $this->settings->getStates(),
	// 			'getCities' => !empty($property) ? $this->settings->getCities(null, $property->state_id) : null,
	// 			'getMunicipalities' => !empty($property) ? $this->settings->getMunicipalities(null, $property->city_id) : null,
	// 			'getCurrencies' => $this->settings->getCurrencies(),
	// 			'getCharacteristics' => $this->properties->getCharacteristics(null, "{$propertyCharacteristicNameField} ASC"),
	// 			'propertyCharacteristicNameField' => $propertyCharacteristicNameField,
	// 			'getTypes' => $this->properties->getTypes(null, "{$propertyTypeNameField} ASC"),
	// 			'propertyTypeNameField' => $propertyTypeNameField,
	// 			'getCategories' => $this->properties->getCategories(null, "{$propertyCategoryNameField} ASC"),
	// 			'propertyCategoryNameField' => $propertyCategoryNameField,
	// 			'getStages' => $this->properties->getStages(null, "{$propertyStageNameField} ASC"),
	// 			'propertyStageNameField' => $propertyStageNameField
	// 		];

	// 		echo view('properties/listing/form_add_edit', $dataView);
	// 	} else {
	// 		throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
	// 	}
	// }

	// public function characteristics()
	// {
	// 	// Set data view
	// 	$dataView = [
	// 		'getCharacteristics' => $this->properties->getCharacteristics()
	// 	];

	// 	// Set data template
	// 	$data = [
	// 		'title' => 'Kirkland Inmuebles',
	// 		'content' => view('properties/characteristics/index', $dataView)
	// 	];

	// 	// Output the view
	// 	echo view('templates/private', $data);
	// }

	// public function load_form_add_edit_characteristic($propertyCharacteristicId = null)
	// {
	// 	// Check for an AJAX request
	// 	if ($this->request->isAJAX()) {
	// 		// Globals
	// 		$characteristic = !empty($propertyCharacteristicId) ? $this->properties->getCharacteristics($propertyCharacteristicId) : null;

	// 		// Set data form Add/Edit
	// 		$dataView = [
	// 			'characteristic' => $characteristic,
	// 			'getLanguages' => $this->settings->getLanguages()
	// 		];

	// 		echo view('properties/characteristics/form_add_edit', $dataView);
	// 	} else {
	// 		throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
	// 	}
	// }

	// public function add_edit_characteristic()
	// {
	// 	// Globals
	// 	$formPost = $this->request->getPost();
	// 	$getLanguages = $this->settings->getLanguages();

	// 	// Post request submitted
	// 	if (!empty($formPost)) {
	// 		$this->validation->reset();

	// 		// Set validation rules
	// 		foreach ($getLanguages as $language) {
	// 			$validationRules["property_characteristic_name_{$language->language_abr}"] = [
	// 				'label' => lang('Globals.name') . ' (' . $language->language_name . ')',
	// 				'rules' => 'required'
	// 			];
	// 		}

	// 		if ($this->validate($validationRules)) {
	// 			$response = $this->properties->addEditCharacteristic($formPost);

	// 			if ($response) {
	// 				session()->setFlashdata('msgConfirm', lang('Globals.confirm_1'));
	// 			} else {
	// 				session()->setFlashdata('msgError', lang('Globals.error_3'));
	// 			}

	// 			echo 0;
	// 		} else {
	// 			// Validation failes, reload the form
	// 			$this->load_form_add_edit_characteristic($formPost['property_characteristic_id']);
	// 		}
	// 	} else {
	// 		throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
	// 	}
	// }
}
