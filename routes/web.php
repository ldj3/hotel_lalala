<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
| 这里是你可以为应用程序注册web路由的地方。这些路由由一个组中的 RouteServiceProvider 加载
| 包含web中间件组。
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index','Order\IndexController@index');
