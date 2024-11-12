<?php

namespace App\Providers;

use App\View\Components\cardComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\listComponent;

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
        Blade::component('components.card-component', cardComponent::class);
        Blade::component('componets.list-component', listComponent::class);
    }
}
