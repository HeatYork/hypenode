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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// v1
$router->group(['prefix' => 'api/v1'], function($app)
{
    $app->get('APIsample','ApiSample@index');

});

// v2

$router->group(['prefix' => 'api/v2'], function($app)
{
    $app->get('APIsample','ApiSample@index');
});
