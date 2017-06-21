<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class SysParamServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('sysparam', function() {
            return new \App\Support\SysParam;
        });
    }
}
