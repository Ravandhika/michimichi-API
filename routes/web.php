<?php
use App\InventoriModel;
use Illuminate\Http\Request;
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
$router->get('/transaksi', ['uses' => 'TransaksiController@getall']);
$router->get('/transaksi/{id}', ['uses' => 'TransaksiController@getbyid']);
$router->post('/transaksi', ['uses' => 'TransaksiController@save']);
$router->put('/transaksi/{id}', ['uses' => 'TransaksiController@update']);
$router->delete('transaksi/{id}', ['uses' => 'TransaksiController@delete']);

$router->get('/inventori', ['uses' => 'InventoriController@getall']);
$router->get('/inventori/{id}', ['uses' => 'InventoriController@getbyid']);
$router->post('/inventori', ['uses' => 'InventoriController@save']);
$router->put('/inventori/{id}', ['uses' => 'InventoriController@update']);
$router->delete('/inventori/{id}', ['uses' => 'InventoriController@delete']);
// Route::get('inventori/{id}', 'InventoryController@show');
//     Route::get('inventori', 'InventoryController@index');
//     Route::post('inventori', 'InventoryController@store');
//     Route::put('inventori/{id}', 'InventoryController@update');
//     Route::delete('inventori/{id}', 'InventoryController@delete');

$router->get('foo', function () {
    return 'Hello World';
});

$router->get('test', function(){
    $inventori = InventoriModel::all();
    return $inventori;
});