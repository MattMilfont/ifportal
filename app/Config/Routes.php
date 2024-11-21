<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::loginPost');
$routes->post('/signin', 'SignIn::signinPost');
$routes->get('/allUsers', 'Users::getAllUsers');
$routes->post('/users', 'Users::getUser');
$routes->get('/news', 'News::getAllNews');
$routes->get('/newsFederation', 'News::getNewsFederation');








