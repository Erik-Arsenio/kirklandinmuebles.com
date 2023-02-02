<?php

namespace App\Controllers;

class Home extends BaseController
{
	// public string $defaultLocale = 'en';
	public function index()
	{
		  //Creamos una función que detecte el idioma del navegador del cliente.
		function getUserLanguage() { 
			$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
			return $idioma; 
		}
	
	   //Almacenamos dicho idioma en una variable
		$user_language=getUserLanguage();
		// echo "Leguaje del navegador- " . $user_language;

		$locale = $this->request->getLocale();
		// echo "Leguaje local- " . $locale;
		If (isset ($_COOKIE["languaje"] ) ) {
			$languaje = $_COOKIE["languaje"];
		} else {
			setcookie ("languaje", $locale);
			$languaje = $locale;
			// Echo " Parece que no pasó por la pagina inicial. Php,
			// Vuelva a ella asi de crea la cookie. " ;
		}
		// Set data index
		$dataIndex = [
			'languaje' => $languaje,
			'sectionContact' => view('templates/contact'),
			'sectionReviews' => view('templates/reviews')
		];


		// Set data template
		$data = [
			'languaje' => $languaje,
			'title' => 'Kirkland Inmobiliaria',
			'content' => view('home/index', $dataIndex),
			'js' => load_js(['js/app-home'])
		];
		// Output the view
		echo view('templates/public', $data);
	}
}
