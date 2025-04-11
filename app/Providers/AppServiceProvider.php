<?php

namespace App\Providers;

use App\Models\Teammember;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {
        View::composer(['components.member', 'other-views'], function ($view) {
            $view->with('teammembers', Teammember::all());
        });
    }
}
