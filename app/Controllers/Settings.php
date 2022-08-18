<?php

namespace App\Controllers;

class Settings extends BaseController
{
	public function currencies()
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('settings/currencies/index')
		];

		// Output the view
		echo view('templates/private', $data);
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

	public function cities()
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('settings/cities/index')
		];

		// Output the view
		echo view('templates/private', $data);
	}
}
