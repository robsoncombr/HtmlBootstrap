<?php

namespace Codi\HtmlBootstrap;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class HtmlBootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      if (class_exists('Illuminate\Foundation\AliasLoader')) {
        AliasLoader::getInstance()->alias('HtmlBootstrap', 'Codi\HtmlBootstrap\Facades\HtmlBootstrapFacade');
      } else {
        class_alias('Codi\HtmlBootstrap\Facades\HtmlBootstrapFacade', 'HtmlBootstrap');
      }

		  $this->loadViewsFrom(__DIR__.'/views', 'HtmlBootstrapViews');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton('HtmlBootstrap', function ($app) {
        return new HtmlBootstrap();
      });
    }
}
