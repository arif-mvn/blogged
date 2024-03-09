<?php
namespace Arifulislamrana\Blogged;

use Illuminate\Support\ServiceProvider;

class BloggedServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make(BlogController::class);
        $this->loadViewsFrom(__DIR__.'/views', 'blogged');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/routes.php';
    }
}
