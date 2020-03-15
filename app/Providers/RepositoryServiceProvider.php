<?php

namespace App\Providers;

use App\Contracts\CurrencyConversionContract;
use App\Factories\FilterFactory;
use App\Repositories\Product\ProductContract;
use App\Repositories\Product\ProductRepository;
use App\Services\CurrencyConversionService;
use App\Services\Filters\SortFilterService;
use App\Services\FilterService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ProductContract::class, ProductRepository::class);
//        $this->app->bind(FilterService::class, SortFilterService::class);
        $this->app->bind(FilterService::class, function(){
            return FilterFactory::getFilter();
        });
        $this->app->singleton(CurrencyConversionContract::class, CurrencyConversionService::class);
        $this->app->alias(CurrencyConversionContract::class, 'Currency');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
