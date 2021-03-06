<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

$routes->get('/persona/empleado/(:any)/(:num)', 'PersonaController::liquidoPagableAction/$1/$2');
// $routes->get('/persona/datos/(:any)/(:num)', 'PersonaController::parametrosActivos');

//Envio de Colecciones
$routes->get('/persona/listar','PersonaController::listarAction');

$routes->get('/hola/mis/datos', 'HolaController::misdatosAction');
//Practica 2
$routes->get('/practica/misdatos', 'Practica2Controller::misdatosAction');
$routes->get('/practica/tabla/multiplicar/(:num)', 'Practica2Controller::tablamultiplicarAction/$1');
$routes->get('/practica/matriz/(:num)', 'Practica2Controller::matrizAction/$1');
$routes->get('/practica/productos', 'Practica2Controller::listardatosproductosAction');
//clase 5
$routes->get('/calculadora/(:num)/(:num)', 'CalculadoraController::aritmeticaAction/$1/$2');
$routes->get('/perimetro/(:num)/(:num)', 'CalculadoraController::geometriaAction/$1/$2');
//
$routes->get('/users', 'UserController::index');
$routes->get('/users/save', 'UserController::index');
$routes->get('/users/update/(:num)', 'UserController::index');
$routes->get('/users/delete/(:num)', 'UserController::index');
//USER
$routes->get('/users/consulta/sql', 'UserController::consultaSqlAction');
$routes->get('/user/new','UserController::newAction');
$routes->post('/user/create','UserController::createAction');
//Tarea3
$routes->get('/calculadora/aritmetica/(:num)/(:num)', 'CalculadoraController::t3aritmeticaAction/$1/$2');
$routes->get('/calculadora/rectangulo/(:num)/(:num)', 'CalculadoraController::t3rectanguloAction/$1/$2');
$routes->get('/calculadora/circulo/(:num)', 'CalculadoraController::t3circuloAction/$1');

