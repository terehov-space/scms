<?php

namespace Terehov\Scms\Providers;

use Illuminate\Support\ServiceProvider;
use Terehov\Scms\Controllers\PageController;

class CmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make(PageController::class);
        $this->loadViewsFrom(__DIR__ . '/../views', 'cms');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../routes/web.php';
    }
}
