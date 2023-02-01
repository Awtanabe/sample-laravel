<?php

namespace App\Providers;

use App\Service\Clock;
use App\Service\ClockInterface;
use Illuminate\Support\ServiceProvider;

class ClockServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ClockInterface::class, Clock::class);
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
