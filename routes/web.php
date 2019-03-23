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

// Route::get('/', 'PagesController@home');
// Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

/*
  Main Page Controller Routes
*/

Route::get('/', 'MainController@index');
Route::post('/', 'MainController@store');
Route::get('/getPageViews', 'MainController@getPageViews');
Route::get('/charity', 'MainController@charity');
Route::get('/mission', 'MainController@mission_statement');
Route::get('/privacy', 'MainController@privacy');

/*
  Contact Controller Routes
*/
Route::resource('contact', 'ContactController'); 

/*
  Quote Controller Routes
*/
Route::resource('quote', 'QuoteController');

Route::resource('projects', 'ProjectsController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
