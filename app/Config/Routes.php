<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('{locale}/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index/$1');
$routes->add('sign-in', 'Accounts::sign_in');
$routes->add('logout', 'Accounts::logout');
$routes->get('projects/listing', 'Projects::listing');
$routes->get('projects/load_form_add_edit_listing/(:any)', 'Projects::load_form_add_edit_listing/$1');
$routes->post('projects/add_edit_listing', 'Projects::add_edit_listing');
$routes->get('projects/amenities', 'Projects::amenities');
$routes->get('projects/load_form_add_edit_amenity/(:any)', 'Projects::load_form_add_edit_amenity/$1');
$routes->post('projects/add_edit_amenity', 'Projects::add_edit_amenity');
$routes->get('investments/(:any)', 'Projects::index/$1');
// $routes->get('investments/(:any)', 'Projects::index/$1');
$routes->get('properties/', 'Properties::index/$1');
$routes->post('properties/', 'Properties::index/$1');
$routes->get('properties/(:segment)', 'Properties::index/$1', ['as' => 'section_place']);
// $routes->post('properties/(:segment)', 'Properties::index/$1');
$routes->get('properties/(:segment)/(:segment)', 'Properties::property/$1/$2', ['as' => 'section_property']);

$routes->get('properties/listing', 'Properties::listing');
$routes->get('properties/load_form_add_edit_listing/(:any)', 'Properties::load_form_add_edit_listing/$1');
$routes->post('properties/add_edit_listing', 'Properties::add_edit_listing');
$routes->get('properties/characteristics', 'Properties::characteristics');
$routes->get('properties/load_form_add_edit_characteristic/(:any)', 'Properties::load_form_add_edit_characteristic/$1');
$routes->post('properties/add_edit_characteristic', 'Properties::add_edit_characteristic');
$routes->get('settings/cities', 'Settings::cities');
$routes->get('settings/load_form_add_edit_city/(:any)', 'Settings::load_form_add_edit_city/$1');
$routes->post('settings/add_edit_city', 'Settings::add_edit_city');
$routes->get('settings/municipalities', 'Settings::municipalities');
$routes->get('settings/load_form_add_edit_municipality/(:any)', 'Settings::load_form_add_edit_municipality/$1');
$routes->post('settings/add_edit_municipality', 'Settings::add_edit_municipality');
$routes->get('settings/dropdown_cities/(:num)', 'Settings::dropdown_cities/$1');
$routes->get('settings/dropdown_municipalities/(:num)', 'Settings::dropdown_municipalities/$1');

// $routes->get('templates/contactForm', 'EmailController::index');
$routes->get('templates/contactForm', 'EmailController::index/$1');
// $routes->get('contact', 'EmailController::index',['as'=>'contactForm']);
// $routes->post('templates/contactForm', 'EmailController::send',['as'=>'send.email']);
$routes->post('templates/contactForm', 'EmailController::send/$1',['as'=>'send.email']);
$routes->post('projects/delete_listing', 'Projects::delete_listing');
$routes->get('tasks/scrap', 'Tasks::scrap');
$routes->get('tasks/scrap2', 'Tasks::scrap2');
$routes->get('tasks/scrap3', 'Tasks::scrap3');
$routes->post('tasks/scrap', 'Tasks::send',['as'=>'send.email']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
