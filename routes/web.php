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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//List all instructors
Route::get('/instructor', 'instructorsController@index');

//View a single instructor
Route::get('/instructor/{id}', 'instructorsController@show');
//Add a new workout session


Route::post('/session', 'sessionsController@store');
//View workout sessions
Route::get('/sessions', 'sessionsController@show');
//view users profile
Route::get('/users', 'usersController@index');
//view user profile
Route::get('/user/{id}', 'usersController@show');
//List all gym locations
Route::get('/locations', 'gymLocationController@index');

