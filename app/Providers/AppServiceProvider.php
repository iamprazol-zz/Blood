<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Groups;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		View::share('groups' , Groups::all());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
