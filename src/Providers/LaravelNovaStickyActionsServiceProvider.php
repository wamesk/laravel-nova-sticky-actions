<?php

declare(strict_types = 1);

namespace Wame\LaravelNovaStickyActions\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;

class LaravelNovaStickyActionsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Nova::serving(function (): void {
            Nova::style('sticky-actions', __DIR__ . '/../../resources/css/style.css');
        });
    }
}
