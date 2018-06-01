<?php

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

$router->get('/', function () {
    return 'Hi there!';
});


$router->get('/sun', 'spaceController@getSunEclipticCoord');
$router->get('/moon', 'spaceController@getMoonEclipticCoord');
$router->get('/tithi', 'spaceController@getTithi');

//getMoonEclipticCoord
