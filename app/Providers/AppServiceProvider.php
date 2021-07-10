<?php

namespace App\Providers;

use App\Http\View\Composers\MenuComposer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //Bootstrap Paginator
        Paginator::useBootstrap();

        View::composer('layouts.partials.sidebar', MenuComposer::class);
    }
}
