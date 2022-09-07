<?php

namespace App\Libraries;

/**
 * Class Cell
 *
 * The Cell class provides methods to insert HTML generated outside the controller/view
 */
class Cell
{
    protected $pager;

    public function __construct()
	{
		$this->pager = \Config\Services::pager();
	}
    
    /**
     * Load an HTML element to display footer with pagination options
     * @param array $params
     *
     * @return string
     **/
    public function footer($params = [])
    {
        $this->pager->makeLinks($params['get_page'], $params['get_entries'], $params['total_rows']);

		$dataView = [
			'itemEnd' => $params['get_page'] * $params['get_entries'] < $params['total_rows'] ? $params['get_page'] * $params['get_entries'] : $params['total_rows'],
			'itemStart' => ($params['get_page'] * $params['get_entries']) - $params['get_entries'] + 1,
			'totalRows' => $params['total_rows'],
			'pager' => $params['get_entries'] < $params['total_rows'] ? $this->pager : null
		];

		return view('templates/cell/footer', $dataView);
    }
}
