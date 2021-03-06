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

$stripe = resolve('App\Billing\Stripe');


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts','PostController@store');

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/tags/{tag}', 'TagController@index');

Route::post('/posts/{post}/comments', 'PostController@store');



Route::get('/posts/{post}', 'PostController@show');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');
