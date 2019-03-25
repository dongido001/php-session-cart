<?php

if (!isset($_SESSION) ) 
{ 
    session_start(); 

    if (! isset($_SESSION['credit'])) 
    {
        $_SESSION['credit'] = 100;
    }
}

require_once '../vendor/autoload.php';

use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */
require_once '../routes.php';

SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();
