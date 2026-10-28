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

        // Only load site settings for frontend views (skip admin panel)
        View::composer(['components.header', 'components.layout', 'components.footer'], function ($view) {
            // Skip DB call on admin routes to avoid cold-start timeout
            if (request()->is('admin*') || request()->is('livewire*')) {
                $view->with('siteSettings', null);
                $view->with('siteLogo', asset('images/logo.png'));
                $view->with('siteName', 'Hm² Infotech');
                return;
            }

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
