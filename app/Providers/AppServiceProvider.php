<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TiagoMarciano\Acl\Acl;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->make(Acl::class, function(){

        });
    }
}
