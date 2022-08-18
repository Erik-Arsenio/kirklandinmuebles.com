<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		if (!session()->get('logged_in')) {
			session()->setFlashdata('msgError', lang('Globals.error_2'));
			return redirect()->to(site_url('sign-in'));
		}
	}

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
		// Do something here
	}
}