<?php

namespace App\Providers;

use App\Models\Kejuruan;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('web.navbarweb', function ($view) {
            $view->with('navKejuruan', Kejuruan::orderBy('id')->get());
        });
    }
}
