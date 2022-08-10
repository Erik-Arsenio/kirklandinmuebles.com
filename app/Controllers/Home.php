<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Set data index
		$dataIndex = [
			'sectionContact' => view('templates/contact'),
			'sectionReviews' => view('templates/reviews')
		];
        
        // Set data template
		$data = [
			'title' => 'Kirkland Inmuebles',
			'content' => view('home/index', $dataIndex)
		];

		// Output the view
		echo view('templates/public', $data);
    }
}
