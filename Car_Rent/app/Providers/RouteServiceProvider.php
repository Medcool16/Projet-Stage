<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
   public function boot()
{

    $this->routes(function () {
        Route::middleware('web')
            ->namespace($this->namespace) // this line
            ->group(base_path('routes/web.php'));

        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace) // this line
            ->group(base_path('routes/api.php'));
    });

    Schema::defaultStringlength(191);
}

}
