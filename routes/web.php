<?php

use Illuminate\Database\Eloquent\Model as Model;
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

Route::get('/', 'MainPageController');

Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/projects/{slug}', 'ProjectController@show')->name('projects.show');
Route::get('/projects/create', 'ProjectController@create')->name('projects.create');
Route::post('/projects', 'ProjectController@store')->name('projects.store');

Route::get('/projects/{project}/tasks', 'TaskController@index')->name('tasks');
Route::get('/projects/{project}/tasks/{task}', 'TaskController@show')->name('tasks.show');

Route::get('/projects/{project}/tasks/{task}/comments', 'CommentsController@index')->name('comments.index');
Route::post('/projects/{project}/tasks/{task}/comments', 'CommentsController@create')->name('comments.create');
Route::delete('/comments/{comment}', 'CommentsController@destroy')->name('comments.destroy');
