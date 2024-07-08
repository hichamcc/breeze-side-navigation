<?php

namespace Hicham\BreezeSideBar;

use Illuminate\Support\ServiceProvider;

class BreezeSideBarServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'breeze-side-bar');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/breeze-side-bar'),
        ], 'breeze-side-bar-views');

        $this->app->bind('laravel-breeze-views', function ($app) {
            return $app['view']->getFinder()->getHints()['laravel-breeze'];
        });

        $this->app['view']->prependNamespace('laravel-breeze', __DIR__ . '/../resources/views');
    }

    public function register()
    {
        //
    }
}
