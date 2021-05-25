<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function (){

    // 數位方塊
    Route::prefix('admin')->group(function ()
    {
        Route::get('/', 'AdminController@index');
        Route::prefix('place')->group(function () {
            Route::get('/', 'PlaceController@index');
            Route::get('/create', 'PlaceController@create');
            Route::post('/store', 'PlaceController@store');
            Route::get('/edit/{id}', 'PlaceController@edit');
            Route::post('/update/{id}', 'PlaceController@update');
            Route::post('/delete/{id}', 'PlaceController@delete');
        });

        Route::prefix('classroom')->group(function () {
            Route::get('/', 'ClassroomController@index');
            Route::get('/create', 'ClassroomController@create');
            Route::post('/store', 'ClassroomController@store');
            Route::get('/edit/{id}', 'ClassroomController@edit');
            Route::post('/update/{id}', 'ClassroomController@update');
            Route::post('/delete/{id}', 'ClassroomController@delete');
        });
        
    });


    // 教育單位

    // 學員

});