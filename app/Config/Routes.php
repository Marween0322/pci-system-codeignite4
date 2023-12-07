<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
#$routes->get('/', 'Home::index');

//routes for books


$routes->group('',['filter' =>'AuthAdmin'],function($routes){

    $routes->get('/','UserController::index');
    $routes->get('/books/list','BookController::bookList');


    $routes->get('/books/add','BookController::bookStore');
    $routes->post('/books/add','BookController::bookStore');

    #$routes->get('/books/createBook','BookController::bookStore');

    $routes->get('/books/view/(:num)','BookController::bookView/$1');

    $routes->post('/books/update/(:num)','BookController::bookUpdate/$1');

    $routes->get('/books/delete/(:num)','BookController::bookViewDelete/$1');

    $routes->post('/books/delete/(:num)','BookController::bookDelete/$1');

    $routes->get('/user/add','UserController::userAdd');
    $routes->post('/user/add','UserController::userAdd');
    $routes->get('/user/studentList','UserController::studentList');

    $routes->get('/book/rent','BookRentalController::index');

    $routes->get('pcs/index', 'PCController::index');
    $routes->get('pcs/add', 'PCController::createPC');

// Routes for PC
    $routes->get('pcs/list', 'PCController::pcList');
    $routes->get('pcs/createPC', 'PCController::pcCreate'); // Change the method name
    $routes->post('pcs/store', 'PCController::pcStore');
    $routes->get('pcs/show/(:num)', 'PCController::show/$1');
    $routes->get('pcs/edit/(:num)', 'PCController::pcEdit/$1');
    $routes->post('pcs/update/(:num)', 'PCController::pcUpdate/$1');
    $routes->get('pcs/delete/(:num)', 'PCController::pcViewDelete/$1');
    $routes->post('pcs/delete/(:num)', 'PCController::pcDelete/$1');

});
//routes for users
$routes->get('/user/logout' , 'UserController::logout');
$routes->post('/user/login' , 'UserController::login');
$routes->get('/user/login' , 'UserController::index');

