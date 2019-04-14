<?php

namespace Redwork\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Redwork\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot() {
      parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map() {
      Route::middleware(['web'])
        ->namespace($this->namespace .'\home')
        ->group(base_path('routes/home.php'));

      Route::middleware(['web', 'auth'])
        ->namespace($this->namespace .'\Admin')
        ->group(base_path('routes/admin.php'));

      Route::middleware(['api'])
        ->namespace($this->namespace .'\API')
        ->group(base_path('routes/api.php'));
    }
}