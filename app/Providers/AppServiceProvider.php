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
        if (app()->environment('production') && env('AUTO_MIGRATE', false)) {
            try {
                \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
                if (\App\Models\Portfolio::query()->count() === 0) {
                    \Illuminate\Support\Facades\Artisan::call('db:seed', [
                        '--class' => 'Database\\Seeders\\PortfolioSeeder',
                        '--force' => true,
                    ]);
                }
            } catch (\Throwable $e) {
                report($e);
            }
        }

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
