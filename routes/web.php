<?php

/** @var Router $router */

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
/** @var Router */

use Laravel\Lumen\Routing\Router;

$router->get('/', function () use ($router) {
    return $router->app->version();
});



$router->group(['prefix' => '/api', 'middleware' => 'autenticador'], function () use ($router) {
    $router->group(['prefix' => '/produtos'], function () use ($router) {
        $router->get('', 'ProdutosController@index');
        $router->post('', 'ProdutosController@store');
        $router->get('/{id}', 'ProdutosController@show');
        $router->put('/{id}', 'ProdutosController@update');
        $router->delete('/{id}', 'ProdutosController@destroy');
    });
    $router->group(['prefix' => '/categorias'], function () use ($router) {
        $router->get('', 'CategoriasController@index');
        $router->post('', 'CategoriasController@store');
        $router->get('/{id}', 'CategoriasController@show');
        $router->put('/{id}', 'CategoriasController@update');
        $router->delete('/{id}', 'CategoriasController@destroy');
    });
    $router->group(['prefix' => '/meiospagamento'], function () use ($router) {
        $router->get('', 'MeiosPagamentoController@index');
        $router->post('', 'MeiosPagamentoController@store');
        $router->get('/{id}', 'MeiosPagamentoController@show');
        $router->put('/{id}', 'MeiosPagamentoController@update');
        $router->delete('/{id}', 'MeiosPagamentoController@destroy');
    });
    $router->group(['prefix' => '/formaspagamento'], function () use ($router) {
        $router->get('', 'FormasPagamentoController@index');
        $router->post('', 'FormasPagamentoController@store');
        $router->get('/{id}', 'FormasPagamentoController@show');
        $router->put('/{id}', 'FormasPagamentoController@update');
        $router->delete('/{id}', 'FormasPagamentoController@destroy');
    });
    $router->group(['prefix' => '/lojas'], function () use ($router) {
        $router->get('', 'LojasController@index');
        $router->post('', 'LojasController@store');
        $router->get('/{id}', 'LojasController@show');
        $router->put('/{id}', 'LojasController@update');
        $router->delete('/{id}', 'LojasController@destroy');
    });
    $router->group(['prefix' => '/clientes'], function () use ($router) {
        $router->get('', 'ClientesController@index');
        $router->post('', 'ClientesController@store');
        $router->get('/{id}', 'ClientesController@show');
        $router->put('/{id}', 'ClientesController@update');
        $router->delete('/{id}', 'ClientesController@destroy');
    });
    $router->group(['prefix' => '/horariosfuncionamento'], function () use ($router) {
        $router->get('', 'HorariosFuncionamentoController@index');
        $router->post('', 'HorariosFuncionamentoController@store');
        $router->get('/{id}', 'HorariosFuncionamentoController@show');
        $router->put('/{id}', 'HorariosFuncionamentoController@update');
        $router->delete('/{id}', 'HorariosFuncionamentoController@destroy');
    });
    $router->group(['prefix' => '/dias'], function () use ($router) {
        $router->get('', 'DiasController@index');
//        $router->post('', 'DiasController@store');
        $router->get('/{id}', 'DiasController@show');
//        $router->put('/{id}', 'DiasController@update');
//        $router->delete('/{id}', 'DiasController@destroy');
    });
});

$router->post('/api/login', 'TokenController@gerarToken');
