<?php

class Hooks
{
	public static function after_controller_constructor()
	{
		// Globals
		$router = service('router');
		$loggedIn = session()->get('logged_in');
		$userRole = session()->get('user_role');

		// Check for logged in user before proceed to analyze some URIs behavior
		if ($loggedIn) {
			switch ($userRole) {
				case 1:
					if (
						$router->controllerName() == '\App\Controllers\Accounts'
						&& in_array($router->methodName(), ['sign_in'])
					) {
						header("Location: " . site_url('projects/listing'));
						die();
					}
					break;
				default:
					if (
						$router->controllerName() == '\App\Controllers\Accounts'
						&& in_array($router->methodName(), ['sign_in'])
					) {
						header("Location: " . site_url());
						die();
					}
					break;
			}
		}
	}
}
