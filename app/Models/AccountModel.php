<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
	protected $request;

	public function __construct()
	{
		$this->request = \Config\Services::request();
		$this->db = \Config\Database::connect();
	}

	/**
	 * Find a member in the system and create login session if proceed
	 * @param array $formPost
	 *
	 * @return bool
	 **/
	public function signIn($formPost)
	{
		// Globals
		$builder = $this->db->table('t_user');

		$user = $builder->getWhere(['user_email' => $formPost['user_email']])->getRow();
		if (isset($user) && password_verify($formPost['user_password'], $user->user_password)) {
			// Create login session
			$dataSignIn = [
				'logged_in' => true,
				'user_id' => $user->user_id,
				'user_email' => $user->user_email,
				'user_name' => $user->user_first_name,
				'user_role' => $user->role_id
			];
			session()->set($dataSignIn);

			return true;
		}

		return false;
	}
}
