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

/* Route::get('/', function () {
    return view('welcome');
}); */
route::get('/', 'ProjectController@welcome');
route::resource('projects', 'ProjectController');

route::patch('/tasks/{task}', 'ProjectTasksController@update');
route::get('/projects/create', 'ProjectController@create');
route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
