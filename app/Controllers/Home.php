<?php

namespace App\Controllers;

class Home extends BaseController
{
	// public string $defaultLocale = 'en';
	public function index()
	{


		if ($this->request->getVar('lang')) {
			$lang = $this->request->getVar('lang');
			$this->request->setLocale($lang);
		} else {
			$lang = $this->request->getLocale();
		}
		// var_dump($lang);
		// $languaje = $lang ;
		
		// echo "Leguaje del select- " . $lang;

		$datalang = [
			'lang' => $lang,
		];
		// Set data index
		$dataIndex = [
			'lang' => $lang,
			'sectionContact' => view('templates/contact', $datalang),
			'sectionReviews' => view('templates/reviews')
		];


		// Set data template
		$data = [
			// 'languaje' => $languaje,
			'title' => 'Venta de Terrenos residenciales y lotes patrimoniales en Mérida, Yucatán, México.',
			'content' => view('home/index', $dataIndex),
			'js' => load_js(['js/app-home'])
		];
		// Output the view
		echo view('templates/public', $data);
	}
}
