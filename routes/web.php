<?php

use Illuminate\Support\Facades\Route;

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
//backend
Route::prefix('admin')->group(function () {
    Route::get('/',[
        'uses'=>'AdminController@index',
        'as'=>'home'
    ]);
    Route::get('/product',[
        'uses'=>'ProductController@index',
        'as'=>'home'
    ]);
    Route::get('/createproduct',[
        'uses'=>'ProductController@create',
        'as'=>'home'
    ]);
    Route::get('/blank',[
        'uses'=>'AdminController@blank',
        'as'=>'blank'
    ]);
});

//frontend

Route::get('/', [
    'uses'=>'HomeController@index',
    'as'=>'home'
]);
Route::get('/about', [
    'uses'=>'HomeController@about',
    'as'=>'about'
]);
