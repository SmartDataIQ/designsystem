<?php

namespace Smartdataiq\Designsystem\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Smartdataiq\Designsystem\Services\DesignSystemService;

class DesignSystemServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'designsystem');
        
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/designsystem'),
        ], 'designsystem-views');
        
        
        // Publish CSS and JS files
        $this->publishes([
            __DIR__.'/../../resources/assets' => public_path('vendor/designsystem/assets'),
        ], 'designsystem-assets');
    }

    public function register()
    {
        // Facade Biniding
        $this->app->bind('DesignSystem', function() {
            return App::make(DesignSystemService::class);
        });
    }
} 