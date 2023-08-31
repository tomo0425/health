<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        // ナビゲーションのコードをビューコンポーザに渡す
        View::composer('layouts.navigation', function ($view) {
            // ここにナビゲーションのコードをコピーする
        });
    }
}
