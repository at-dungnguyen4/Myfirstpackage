<?php

namespace DungNguyen\Commands;

use Illuminate\Support\ServiceProvider;

class ArtisanTextServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.dungnguyen.myfirstpackage', function($app) {
            return $app['DungNguyen\Commands\RandomTextCommand'];
        });

        $this->commands('command.dungnguyen.myfirstpackage');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
