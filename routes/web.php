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

/*
  Main Page Controller Routes
*/

Auth::routes(['verify' => true]);

Route::group(['namespace' => 'Home'], function(){
  Route::get('/', 'MainController@index');
  Route::post('/', 'MainController@store');
  Route::get('/getPageViews', 'MainController@getPageViews');
  Route::get('/charity', 'MainController@charity');
  Route::get('/mission', 'MainController@mission_statement');
  Route::get('/privacy', 'MainController@privacy');
  
  Route::resource('contact', 'ContactController'); 
  Route::resource('quote', 'QuoteController');
  Route::resource('projects', 'ProjectsController');
});

Route::group(['middleware' => 'auth', 'namespace' => 'admin'], function(){
  Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});

/*
  Quote Controller Routes
*/






Route::get('/test', 'MainController@test');
