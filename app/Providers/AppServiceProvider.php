<?php

namespace App\Providers;

use Filament\Pages\Page;
use Filament\Facades\Filament;
use Illuminate\Support\HtmlString;
use Filament\View\PanelsRenderHook;
use Filament\Actions\MountableAction;
use Filament\Support\Enums\Alignment;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentView;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerRenderHook(
                PanelsRenderHook::USER_MENU_BEFORE,
                fn(): string => Blade::render('<div class="hidden md:block">@livewire("navbar-date-time")</div>')
            );
        });


        FilamentView::registerRenderHook(
            PanelsRenderHook::SCRIPTS_AFTER,
            fn(): string => new HtmlString('
        <script>document.addEventListener("scroll-to-top", () => window.scrollTo(0, 0))</script>
            '),
        );
        
    }

    
}
