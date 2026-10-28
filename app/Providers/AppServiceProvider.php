<?php

namespace App\Providers;

use App\Models\SiteSetting;
use App\Models\Teammember;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer(['components.member', 'other-views'], function ($view) {
            try {
                $view->with('teammembers', Teammember::all());
            } catch (\Throwable $e) {
                $view->with('teammembers', collect());
            }
        });

        View::composer(['components.header', 'components.layout', 'components.footer'], function ($view) {
            try {
                $settings = SiteSetting::current();
            } catch (\Throwable $e) {
                $settings = null;
            }

            $view->with('siteSettings', $settings);
            $view->with(
                'siteLogo',
                $settings ? $settings->logoUrl() : asset('images/logo.png')
            );
            $view->with(
                'siteName',
                $settings?->site_name ?: 'Hm² Infotech'
            );
        });
    }
}
