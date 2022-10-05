<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\Dao\StarPhoneDaoInterface', 'App\Dao\StarPhoneDao');
        $this->app->bind('App\Contracts\Services\StarPhoneServiceInterface', 'App\Services\StarPhoneService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
