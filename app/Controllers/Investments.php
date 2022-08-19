<?php

namespace App\Controllers;

class Investments extends BaseController
{
	public function index($investmentName)
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('investments/' . $investmentName),
			'js' => load_js(['js/app-' . $investmentName])
		];

		// Output the view
		echo view('templates/public', $data);
	}

	public function listing()
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('investments/listing/index')
		];

		// Output the view
		echo view('templates/private', $data);
	}

	public function amenities()
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('investments/amenities/index')
		];

		// Output the view
		echo view('templates/private', $data);
	}
}
