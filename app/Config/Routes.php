<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('_servicios', 'Home::servicios');
$routes->get('_clientes', 'Home::clientes');
$routes->get('_contacto', 'Home::contacto');
$routes->get('_login', 'Home::login');
