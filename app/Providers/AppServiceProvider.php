<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
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
