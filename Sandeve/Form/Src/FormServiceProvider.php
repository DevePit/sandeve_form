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
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['SanDeve_Form'] = $this->app->share(function($app) {
             return new \Sandeve\Form;
        });
    }
}
