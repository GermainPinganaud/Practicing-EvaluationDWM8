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

Route::get('/', 'BaseController@index');
Route::get('/creer', 'CreateController@index');
Route::get('/liste', 'ListController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/project/insert', 'ProjectController@insertOne');
Route::get('/project/delete/{id}', 'ProjectController@deleteOne');
Route::get('/project/update/{id}', 'ProjectController@updateOne');
Route::post('/project/update', 'ProjectController@updateOneAction');
