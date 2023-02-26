<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Home
$routes->get('/', 'Home::index', ['filter' => 'guestAuth']);

// Auth
$routes->get('/login', 'Auth::loginIndex', ['filter' => 'guestAuth']);
$routes->get('/register', 'Auth::registerIndex', ['filter' => 'guestAuth']);
$routes->get('/logout', 'Auth::logout', ['filter' => 'logoutAuth']);
$routes->post('/login', 'Auth::login', ['filter' => 'guestAuth']);
$routes->post('/register', 'Auth::register', ['filter' => 'guestAuth']);

// Test
$routes->get('/test/introduction', 'Test::introduction', ['filter' => 'userAuth']);
$routes->post('/test/start', 'Test::start', ['filter' => 'userAuth']);
$routes->get('/test/(:segment)', 'Test::index/$1', ['filter' => 'testAuth']);
$routes->get('/test/(:segment)/(:num)', 'Test::index/$1/$2', ['filter' => 'testAuth']);
$routes->post('/test/(:segment)/(:num)', 'Test::submit/$1/$2', ['filter' => 'testAuth']);
$routes->get('/test/(:segment)/finish', 'Test::finish', ['filter' => 'testAuth']);
$routes->get('/test/(:segment)/result', 'Test::result', ['filter' => 'userAuth']);
$routes->get('/home/profile', 'Home::profile', ['filter' => 'userAuth']);

// $routes->get('/login', 'Auth::index');

// $routes->match(['get', 'post'], 'Auth/register', 'Auth::register');
// $routes->match(['get', 'post'], 'Auth/login', 'Auth::login');
// $routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

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
