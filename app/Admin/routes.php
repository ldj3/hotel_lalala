<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

//配置后台路由
Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('users', UserController::class);

    $router->resource('hotel', HotelController::class);

    $router->resource('xhotel', HouceController::class);

    $router->resource('rateplan', RateplanController::class);

    $router->resource('roomtype', RoomtypeController::class);

    $router->resource('unionpay', UnionpayController::class);


    Route::get('test','TaobaoController@test');

});