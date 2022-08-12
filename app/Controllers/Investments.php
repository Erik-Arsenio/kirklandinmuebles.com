<?php

namespace App\Controllers;

class Investments extends BaseController
{
	public function index($investmentName)
	{
		// Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('investments/' . $investmentName)
		];

		// Output the view
		echo view('templates/public', $data);
	}
}
