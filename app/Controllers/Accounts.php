<?php

namespace App\Controllers;

class Accounts extends BaseController
{
	public function sign_in()
	{
		// Output the view
		echo view('accounts/sign_in');
	}
}
