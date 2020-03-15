<?php

namespace App\Providers;

use App\Category;
use App\Currency;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('currency', function ($view) {
            $currencies = Cache::rememberForever('currencies', function(){
                return Currency::orderBy('country','ASC')->get();
            });
            $view->with('currencies',  $currencies);
        });

        View::composer('category', function ($view) {
            $currencies = Cache::rememberForever('categories', function(){
                return Category::all();
            });
            $view->with('categories',  $currencies);
        });

    }
}
