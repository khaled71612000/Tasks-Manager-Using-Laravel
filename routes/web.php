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

Route::get('/todos', 'todoscontroller@index');
// curly prace means arugumnet passed,a dunamic property
Route::get('/todos/{todo}', 'todoscontroller@show');
// create and submit
Route::get('/new-todos', 'todoscontroller@create');
// actually store
Route::post('/store-todos', 'todoscontroller@store');

// get data
Route::get('todos/{todo}/edit','todoscontroller@edit');
// update data
Route::post('todos/{todo}/update-todos', 'todoscontroller@update');

Route::get('todos/{todo}/delete','todoscontroller@destroy');

Route::get('todos/{todo}/complete','todoscontroller@complete');
