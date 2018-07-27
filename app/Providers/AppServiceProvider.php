<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function ($view){ //bind the variable archives to the view
          //so we will have access to this variable and be able to run this method globally

          $view->with('archives', \App\Post::archives());

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
     $this->app->singleton('App\Billing\Stripe', function(){

        return new \App\Billing\Stripe(config('services.stripe.secret'));

      });

    }
}
