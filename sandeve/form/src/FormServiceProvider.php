<?php

namespace Sandeve\Form;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(){
         // Routing
         include __DIR__.'/routes.php';
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){        
        // Config
        $this->mergeConfigFrom( __DIR__.'/Config/ConfigForm.php', 'config');
        
        // View
        $this->loadViewsFrom(__DIR__ . '/Views', 'SForm');
            
        $this->app['SanDeve_Form'] = $this->app->share(function($app) {
             return new Form;
        });
    }
}