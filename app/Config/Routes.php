<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::loginPost');
$routes->post('/signin', 'Signin::signinPost');
$routes->get('/allUsers', 'Users::getAllUsers');
$routes->post('/users', 'Users::getUser');






