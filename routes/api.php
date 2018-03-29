<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
| 这里是你可以为应用程序注册 API 路由的地方，这些路由由一个组中的 RouteServiceProvider加载，
| 被指定为 "api" 中间件组。
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('unionpay','Api\UnionpayController@getcar');
Route::post('unionpay','Api\UnionpayController@api_data');
