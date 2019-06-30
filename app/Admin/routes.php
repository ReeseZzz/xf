<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    Route::group([
        'prefix'    => 'naves',
    ], function (Router $router) {
        $router->get('/', 'NavesController@index');
        $router->get('/create', 'NavesController@create');
        $router->post('/', 'NavesController@store');
        $router->get('/{id}/edit', 'NavesController@edit');
        $router->put('/{id}', 'NavesController@update');
    });

    Route::group([
        'prefix'    => 'business_types',
    ], function (Router $router) {
        $router->get('/', 'BusinessTypesController@index');
        $router->get('/create', 'BusinessTypesController@create');
        $router->post('/', 'BusinessTypesController@store');
        $router->get('/{id}/edit', 'BusinessTypesController@edit');
        $router->put('/{id}', 'BusinessTypesController@update');
    });

    Route::group([
        'prefix'    => 'business',
    ], function (Router $router) {
        $router->get('/', 'BusinessController@index');
        $router->get('/create', 'BusinessController@create');
        $router->post('/', 'BusinessController@store');
        $router->get('/{id}/edit', 'BusinessController@edit');
        $router->put('/{id}', 'BusinessController@update');
    });

    Route::group([
        'prefix'    => 'cases',
    ], function (Router $router) {
        $router->get('/', 'CasesController@index');
        $router->get('/create', 'CasesController@create');
        $router->post('/', 'CasesController@store');
        $router->get('/{id}/edit', 'CasesController@edit');
        $router->put('/{id}', 'CasesController@update');
    });

    Route::group([
        'prefix'    => 'resources',
    ], function (Router $router) {
        $router->get('/', 'ResourceController@index');
        $router->get('/create', 'ResourceController@create');
        $router->post('/', 'ResourceController@store');
        $router->get('/{id}/edit', 'ResourceController@edit');
        $router->put('/{id}', 'ResourceController@update');
    });
    Route::group([
        'prefix'    => 'config',
    ], function (Router $router) {
        $router->get('/', 'ConfigController@index');
        $router->get('/create', 'ConfigController@create');
        $router->post('/', 'ConfigController@store');
        $router->get('/{id}/edit', 'ConfigController@edit');
        $router->put('/{id}', 'ConfigController@update');
    });
});
