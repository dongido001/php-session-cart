<?php

require_once 'Controllers/ProductController.php';
require_once 'Controllers/PaymentController.php';
require_once 'Controllers/ReviewController.php';

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('\App\Controllers');

SimpleRouter::get('/', 'ProductController@index');
SimpleRouter::post('/add-to-cart', 'ProductController@addToCart');
SimpleRouter::post('/remove-from-cart', 'ProductController@removeFromCart');
SimpleRouter::get('/checkout', 'PaymentController@showBuyPage');
SimpleRouter::post('/make-payment', 'PaymentController@makePayment');
SimpleRouter::post('/add-review', 'ReviewController@addReview');