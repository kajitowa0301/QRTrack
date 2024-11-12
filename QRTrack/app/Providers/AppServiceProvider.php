<?php

namespace App\Providers;

use App\View\Components\cardComponent;
use App\View\Components\deleteBox;
use App\View\Components\likeButtonComponent;
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
        Blade::component('components.like-button-component', likeButtonComponent::class);
        Blade::component('components.delete-box-component', deleteBox::class);
    }
}
