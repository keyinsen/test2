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
*/

Route::get('/', function () {
    return view('welcome');
});


//（1）引入dingo api，
$api = app('Dingo\Api\Routing\Router');
//（2）创建API版本
//开始定义api的接口路由
$api = app('Dingo\Api\Routing\Router');
$api->version('v1',function ($api){
//    'middleware'=>'jwt.auth'
    $api->group(['namespace' => 'App\Http\Controllers\Api',], function($api){
        $api->get('test','TestController@index');
    });
});

$api->version('v1',function ($api){
    $api->get('hh',function (){
        echo 444;
    });
});