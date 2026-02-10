<?php

namespace App\Providers;

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

    public function boot(): void
    {
        \App\Models\User::observe(\App\Observers\UserObserver::class);
        \Illuminate\Support\Facades\Blade::component('layouts.layout', 'layouts.layout');
    }
}
