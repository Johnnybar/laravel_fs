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


// Route::get('/', function () {
//   $name = 'Jamesssss';
//   $age = 33;
//   //Below is a query builder
//
//   // $tasks = DB::table('tasks')->latest()->get();
//
//   $tasks = Task::all();
//
//     return view('welcome', compact('name', 'age','tasks'));
// });

Route::get('/', 'PostController@index');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/posts/{post}', 'PostController@show');