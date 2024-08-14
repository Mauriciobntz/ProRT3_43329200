<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Set the default namespace for controllers
$routes->setDefaultNamespace('App\Controllers');

// Set the default controller
$routes->setDefaultController('Home');

// Set the default method
$routes->setDefaultMethod('index');

// Ensure URI dashes are not translated to underscores
$routes->setTranslateURIDashes(false);

// Set the 404 override handler
$routes->set404Override();

// Define the route for the homepage
$routes->get('/', 'Home::index');
// Define routes for other methods in the Home controller
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('sign_in', 'Home::sign_in');
$routes->get('login', 'Home::login');
$routes->get('contacto', 'Home::contacto');
