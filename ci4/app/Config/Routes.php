<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'Home::index');

use App\Controllers\Guests;
use App\Controllers\News;
use App\Controllers\Pages;


$routes->get('Guests', [Guests::class, 'index']);           // Add this line
$routes->get('Guests/(:segment)', [Guests::class, 'show']); // Add this line

$routes->get('news', [News::class, 'index']); 
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']); 
$routes->get('news/(:segment)', [News::class, 'show']); 

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);