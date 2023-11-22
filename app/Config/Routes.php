<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/send-email', 'Home::sendEmail');

 //Page routes

$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Home::dashboard');

//User Routes

$routes->get('/register', 'Home::register');

$routes->post('/registeruser', 'User_controller::registeruser');

$routes->get('/insert-test-data', 'User_controller::insertTestData');

$routes->post('login', 'User_controller::login');

$routes->get('/logout', 'User_controller::logout');


$routes->get('/verify', 'Home::verify_user');

$routes->post('/verify-user', 'User_controller::verify_user');


$routes->get('/send-verification-link', 'User_controller::sendVerificationLink');



//Review Routes

$routes->get('/review', 'Home::review');

$routes->get('/reviews', 'Home::review2');

$routes->get('/user-profile', 'Home::userReviews');

$routes->post('/add-review', 'Crud_controller::addReview');

$routes->post('/delete-review', 'Crud_controller::deleteReview');




