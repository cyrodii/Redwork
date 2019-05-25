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
  Route::get('/charity', 'MainController@charity');
  Route::get('/mission', 'MainController@mission_statement');
  Route::get('/privacy', 'MainController@privacy');

  Route::get('/api/contact','ContactController@get');
  Route::resource('/forms/contact', 'ContactController'); 
  Route::resource('quote', 'QuoteController');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function(){
  Route::get('/dashboard', 'HomeController@index')->name('dashboard');
  
  /* Stats Api Routes */
  Route::resource('/api/stats', 'StatsController');
  Route::get('/api/stats/{stat}', 'StatsController@show');
  Route::post('/api/stats/{stat}', 'StatsController@update');

  /* Totals Api Controller */
  Route::resource('/api/totals', 'TotalsController');
  Route::get('/api/totals/{total}', 'TotalsController@show');
  
  Route::resource('/api/projects','ProjectsController');
  Route::apiResource('/api/quote','QuoteController');
  Route::get('/api/checkAuth', function(){ return Auth::user(); });
});

Route::group(['middleware' => 'auth', 'namespace' => 'API'], function(){


});





