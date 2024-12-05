<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// http://localhost/ProyectoDW202416/RutaLogin
$routes->get('/RutaLogin', 'Home::index');
$routes->get('/RutaCompras', 'Home::compras');
$routes->get('/Compras', 'CIndex::indexc');
$routes->get('/Login', 'LIndex::indexl');
$routes->get('/Mylogin', 'MLogin::MyLogin');