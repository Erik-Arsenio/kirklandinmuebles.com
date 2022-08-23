<?php

namespace App\Controllers;

use App\Models\AccountModel;

class Accounts extends BaseController
{
	protected $account;

	public function __construct()
	{
		$this->account = new AccountModel();
	}

	public function sign_in()
	{
		// Globals
		$formPost = $this->request->getPost();

		// Post request submitted
		if (!empty($formPost)) {
			$auth = $this->account->signIn($formPost);

			// Verify login authenticity and proceed accordingly
			if ($auth) {
				return redirect()->to(site_url('projects/listing'));
			} else {
				session()->setFlashdata('msgError', lang('Globals.error_1'));
			}
		}

		// Set data template
		$data = [
			'title' => lang('Globals.sign_in')
		];

		// Output the view
		echo view('accounts/sign_in', $data);
	}

	public function logout()
	{
		// Destroy session variables and redirect
		session()->remove(['logged_in', 'user_id', 'user_email', 'user_name', 'user_role']);
		return redirect()->to(site_url('sign-in'));
	}
}
