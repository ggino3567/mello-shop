<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
    
$routes->get('/login', 'Users::login');
$routes->get('/register', 'Users::register');