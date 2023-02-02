<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * @return void
     */
    // 登録処理
    public function register()
    {      
        app()->singleton('myservice', 'App\MyClasses\PowerMyService');
        app()->singleton('App\MyClasses\MyServiceInterface', 'App\MyClasses\PowerMyService');
        echo "<b><MyServiceProvider/register></b><br/>";
        //
    }

    /**
     * Bootstrap services.
     *@return void
     */
    // 登録したものの初期化
    public function boot()
    {
        //
        echo "<b><MyServiceProvider/boot></b><br/>";
    }
}
