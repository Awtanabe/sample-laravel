<?php

namespace App\Providers;

use App\MyClasses\MyServiceInterface;
use App\MyClasses\PowerMyService;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     */
    // 登録処理
    public function register()
    {

        app()->singletom('myservice','App\MyClasses\PowerMyService');
        app()->singletom('App\MyClasses\MyServiceInterface', 'App\MyClasses\PowerMyService');
        echo "<b><MyServiceProvider/register></b><br/>";
        //
    }

    /**
     * Bootstrap services.
     *
     */
    // 登録したものの初期化
    public function boot()
    {
        //
        echo "<b><MyServiceProvider/boot></b><br/>";
    }
}
