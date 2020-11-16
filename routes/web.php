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
$router->get('key', function(){
    return str_random(32);
});
$router->get('/transaki', ['uses' => 'transaksiController@getall']);
$router->get('/transaksi/{id}', ['uses' => 'transaksiController@getbyid']);
$router->post('/transaksi', ['uses' => 'transaksiController@save']);
$router->put('/transaksi/{id}', ['uses' => 'transaksiController@update']);
$router->delete('/transaksi/{id}', ['uses' => 'transaksiController@delete']);

$router->get('/inventori', ['uses' => 'inventoriController@getall']);
$router->get('/inventori/{id}', ['uses' => 'inventoriController@getbyid']);
$router->post('/inventori', ['uses' => 'inventoriController@save']);
$router->put('/inventori/{id}', ['uses' => 'inventoriController@update']);
$router->delete('/inventori/{id}', ['uses' => 'inventoriController@delete']);
