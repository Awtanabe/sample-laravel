<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MyClasses\PowerMyService;
use App\MyClasses\MyService;
use App\MyClasses\MyServiceInterface;
use App\Services\Riak\Connection;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      app()->singleton('App\MyClasses\MyServiceInterface', 'App\MyClasses\PowerMyService');
    }
}
