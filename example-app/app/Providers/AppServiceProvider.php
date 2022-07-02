<?php

namespace App\Providers;

use App\Models\Product\Product;
use App\Models\Product\ProductModelInterface;
use Illuminate\Pagination\Paginator;
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
        $this->app->bind(ProductModelInterface::class, function () {
            return new Product();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Paginator::useBootstrapFour();
        Paginator::defaultView('vendor.pagination.bootstrap-5');
//        Paginator::defaultSimpleView('vendor.pagination.simple-bootstrap-4');
    }
}
