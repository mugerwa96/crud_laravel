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

Route::get('/home', function () {
    return view('welcome');
});



Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/employees','EmployeeController@index');
    Route::get('/create','EmployeeController@create');
    Route::get('/store','EmployeeController@store');
    Route::get('/edit/{id}','EmployeeController@edit');
    Route::get('/update/{id}','EmployeeController@update');
    Route::get('/destroy/{id}','EmployeeController@destroy');

    Route::resource('posts','PostController');
});
