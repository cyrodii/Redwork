<?php
  Route::get('/dashboard', 'HomeController@index')->name('dashboard');

  Route::apiResource('/api/projects','ProjectsController');