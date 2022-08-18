<?php

namespace App\Controllers;

class Properties extends BaseController
{
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
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('properties/characteristics/index')
		];

		// Output the view
		echo view('templates/private', $data);
	}

	public function types()
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('properties/types/index')
		];

		// Output the view
		echo view('templates/private', $data);
	}
}
