<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

/**
 * AppServiceProvider 
 * 
 * @uses ServiceProvider
 * @author Clint Fralick <cfralick@creeperengine.com> 
 */
class GuzzleClientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Client::class, function($app) {
            return new Client($app['config']['guzzle']);
        });
    }
}
