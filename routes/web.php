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
    session(['name' => 'liangwenyuan']);
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () { //路由前缀
    Route::get('/admin', 'IndexController@admin');
    Route::get('/index', 'IndexController@index');
    Route::resource('article', 'ArticleController');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/admin/login', 'Admin\IndexController@login');
});

//Route::get('/admin','Admin\IndexController@admin');
//Route::get('/index','Admin\IndexController@index');

//命名路由
Route::get('/user', ['as' => 'profile', function () {
    echo route('profile'); //http://192.168.10.10/user
    echo session('name');
}]);

Route::get('/test', ['as' => 'profile', 'uses' => 'Admin\IndexController@index']);
