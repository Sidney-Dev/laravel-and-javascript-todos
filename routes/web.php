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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', 'TodoController@index');
Route::get('/todos/all', 'TodoController@fetch');
// Route::get('/todo/new', 'TodoController@create');
Route::post('/todo/store', 'TodoController@store');
Route::delete('/todo/{todo}/delete', 'TodoController@destroy');
