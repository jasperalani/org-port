<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

require_once '../controllers/include.php';

$router->get('/', function () use ($router) {
    return view('landing'); 
});

$router->post('/register', function () use ($router) {
    new RegistrationController();
});
