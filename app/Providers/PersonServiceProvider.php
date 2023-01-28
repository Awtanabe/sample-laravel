<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class PersonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    # registerメソッドはサービス・プロバイダーの登録処理
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    // ブートストラップ処理 処理の割り込み
    public function boot()
    {
        //
    }
}
